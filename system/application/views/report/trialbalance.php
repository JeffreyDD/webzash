<?php
	$temp_dr_total = 0;
	$temp_cr_total = 0;

	echo "<table border=0 cellpadding=5 class=\"generaltable\">";
	echo "<thead><tr><th>Ledger A/C</th><th>O/P Balance</th><th>Dr Total</th><th>Cr Total</th></tr></thead>";
	$this->load->model('Ledger_model');
	$all_ledgers = $this->Ledger_model->get_all_ledgers();
	$odd_even = "odd";
	foreach ($all_ledgers as $ledger_id => $ledger_name)
	{
		if ($ledger_id == 0) continue;
		echo "<tr class=\"tr-" . $odd_even . "\">";
		echo "<td>";
		echo $ledger_name;
		echo "</td>";
		echo "<td>";
		list ($opbal_amount, $opbal_type) = $this->Ledger_model->get_op_balance($ledger_id);
		if ($opbal_type == "C")
			echo "Cr " . $opbal_amount;
		else
			echo "Dr " . $opbal_amount;
		echo "</td>";
		echo "<td>";
		$dr_total = $this->Ledger_model->get_dr_total($ledger_id);
		if ($dr_total)
		{
			echo $dr_total;
			$temp_dr_total += $dr_total;
		}
		echo "</td>";
		echo "<td>";
		$cr_total = $this->Ledger_model->get_cr_total($ledger_id);
		if ($cr_total)
		{
			echo $cr_total;
			$temp_cr_total += $cr_total;
		}
		echo "</td>";
		echo "</tr>";
		$odd_even = ($odd_even == "odd") ? "even" : "odd";
	}
	echo "<tr><td>TOTAL</td><td></td><td>" . $temp_dr_total . "</td><td>" . $temp_cr_total . "</td></tr>";
	echo "</table>";
?>