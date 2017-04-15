echo "Erreurs" > erreurs.txt
for d in inf*; do
	tp_dir=$d/tp/tp7
	team=$(echo $d | sed 's/inf1995-\([0-9]*\)/\1/')
	if [ -d $tp_dir ] ; then
		cat correction.txt | sed "s/\([\t ]*Équipe #[\t ]*:\).*/\1 $team/" > $tp_dir/correction_tp7.txt
	else
		echo "Aucun dossier TP7 trouvé pour équipe $d" | tee erreurs.txt
		cat correction.txt | sed "s/\([\t ]*Équipe #[\t ]*:\).*/\1 $team/" > $tp_dir/correction_tp7.txt
	fi
done
