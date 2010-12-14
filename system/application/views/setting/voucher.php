<?php
	echo form_open('setting/voucher');

	echo "<p>";
	echo form_fieldset('Prefix Settings', array('class' => "fieldset-auto-width"));

	echo "<p>";
	echo form_label('Prefix Receipt Vouchers', 'receipt_prefix');
	echo "<br />";
	echo form_input($receipt_prefix);
	echo "</p>";

	echo "<p>";
	echo form_label('Prefix Payment Vouchers', 'payment_prefix');
	echo "<br />";
	echo form_input($payment_prefix);
	echo "</p>";

	echo "<p>";
	echo form_label('Prefix Contra Vouchers', 'contra_prefix');
	echo "<br />";
	echo form_input($contra_prefix);
	echo "</p>";

	echo "<p>";
	echo form_label('Prefix Journal Vouchers', 'journal_prefix');
	echo "<br />";
	echo form_input($journal_prefix);
	echo "</p>";

	echo form_fieldset_close();
	echo "</p>";

	echo "<p>";
	echo form_submit('submit', 'Update');
	echo " ";
	echo anchor('setting', 'Back', array('title' => 'Back to settings'));
	echo "</p>";

	echo form_close();

