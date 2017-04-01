root=$PWD
for d in inf*; do
	tp_dir=$root/$d/tp7
	# cp $root/correction.txt $tp_dir/correction.txt
	tmux new-window -c $d/tp/tp7
done
