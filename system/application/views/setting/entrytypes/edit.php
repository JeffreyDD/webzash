<?php
	echo form_open('setting/entrytypes/edit/' . $entry_type_id);

	echo "<p>";
	echo form_label('Label', 'entry_type_label');
	echo "<br />";
	echo form_input($entry_type_label);
	echo "<br />";
	echo "<span class=\"form-help-text\">Note: Only alphabets are allowed without any spaces or any special characters</span>";
	echo "</p>";

	echo "<p>";
	echo form_label('Name', 'entry_type_name');
	echo "<br />";
	echo form_input($entry_type_name);
	echo "</p>";

	echo "<p>";
	echo form_label('Description', 'entry_type_description');
	echo "<br />";
	echo form_textarea($entry_type_description);
	echo "</p>";

	echo "<p>";
	echo form_label('Base Type', 'entry_type_base_type');
	echo "<br />";
	echo $base_type;
	echo "</p>";

	if ($is_normal_entry)
	{
		echo "<p id=\"bank_cash_ledger_restriction\">";
		echo form_label('Restrictions', 'bank_cash_ledger_restriction');
		echo "<br />";
		echo form_dropdown('bank_cash_ledger_restriction', $bank_cash_ledger_restrictions, $bank_cash_ledger_restriction_active);
		echo "</p>";
	} else {
		echo "<p id=\"inventory_entry_type\">";
		echo form_label('Inventory Entry Type', 'inventory_entry_type');
		echo "<br />";
		echo $inventory_entry_type;
		echo "</p>";
	}

	echo "<p>";
	echo form_label('Entry Numbering', 'entry_type_numbering');
	echo "<br />";
	echo form_dropdown('entry_type_numbering', $entry_type_numberings, $entry_type_numbering_active);
	echo "</p>";

	echo "<p>";
	echo form_label('Prefix', 'entry_type_prefix');
	echo "<br />";
	echo form_input($entry_type_prefix);
	echo "</p>";

	echo "<p>";
	echo form_label('Suffix', 'entry_type_suffix');
	echo "<br />";
	echo form_input($entry_type_suffix);
	echo "</p>";

	echo "<p>";
	echo form_label('Zero Padding', 'entry_type_zero_padding');
	echo "<br />";
	echo form_input($entry_type_zero_padding);
	echo "</p>";

	echo "<p>";
	echo form_submit('submit', 'Update');
	echo " ";
	echo anchor('setting/entrytypes', 'Back', 'Back to Entry Types');
	echo "</p>";

	echo form_close();

