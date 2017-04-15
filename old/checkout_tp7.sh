function get_value(){
	file=$1
	var_name=$2
	var_value=""
	while read -r line; do
		if [[ $line == ${var_name}=* ]]; then
			var_value=${line#${var_name}=}
		fi
	done < $file
	echo ${var_value}
}

settings_file="settings.txt"

for t in $(cat ./phil_teams.txt); do
	echo Current team : $t
done


