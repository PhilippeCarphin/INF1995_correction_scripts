for d in $(ls code_final/); do
	echo code_final/$d;
	tmux new-window -c $PWD/code_final/$d "vim correction_code_final.txt"
done
