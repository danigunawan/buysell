<?php
/**
 *
 *
 */

return array(
	'back_to_withdrawal' => 'Back to Withdrawal',
	'my_credit_balances' => 'Credit Amount',
	'account_menu_edit_profile'	=> 'Edit Profile',
	'edit-profile' => array(
		'new_email_activate_sucess' => 'Email address updated successfully. Please login below',
		'wrong_password' => 'Incorrect password',
		'basic_details_update_sucess' => 'Basic details updated successfully',
		'personal_details_update_sucess' => 'Personal details updated successfully',
		'company_details_update_sucess' => 'Company details updated successfully',
		'basic_details_title' => 'Basic Details',
		'profile_image_title' => 'Update Profile Image',
		'image_allowed_format' => 'Allowed formats are VAR_FORMAT',
		'profile_image_update_success' => 'Profile image updated successfully',
		'profile_image' => 'Profile Image',
		'current_email' => 'Current Email',
		'new_email' => 'New Email',
		'current_password' => 'Current Password',
		'password' => 'New Password',
		'confirm_password' => 'Confirm Password',
		'personal_details_title' => 'Personal Details',
		'first_name' => 'First name',
		'last_name' => 'Last name',
		'contact_number' => 'Contact number',
		'city_state_country' => 'City, State, Country',
		'about_me' => 'About me',
		'your_photo' => 'Your Photo',
		'changepassword_success_message' => 'Your password has been changed.',
		'alternateEmail_newEmail_activation_msg' => 'Please click the confirmation link sent to your email address to confirm the email change.',
		'edit_profile' => 'Edit Profile',
		'user_name' => 'User Name',
		'subscribe_newsletter' => 'Subscribed to newsletter',
	),
	'email-activation'	=> array(
		'new_email_activation' => 'New email activation',
		'alternateEmail_newEmail_update_suc_msg' => 'Your email has been changed.',
		'alternateEmail_invalid_activation' => 'Invalid activation code.',
		'my_settings' => 'Settings',
	),
	'current_password' => 'Check your current password',
	'my-withdrawals'		=> array(
		'account_menu_withdrawal'	=> 'Withdrawals',
		'currency_balances' => 'Currency Balances',
		'pending_amount' => 'Pending Balance',
		'cleared_amount' => 'Cleared Balance',
		'withdraw_request' => 'Withdrawal request',
		'withdraw_request_list' => 'Withdraw Request List',
		'withdraw_amount' => 'Amount to Withdraw',
		'pay_to_details' => 'Pay to account',
		'fee_notes' => '<strong>Note:</strong> Fees and currency conversion charges as applicable by the Payment gateway.',
		'withdraw_request_success' => 'Withdraw request submitted successfully',
		'date_added' => 'Date added',
		'id' => 'ID',
		'amount' => 'Amount',
		'paid_to' => 'Pay to account',
		'paid_notes' => 'Notes',
		'status' => 'Status',
		'action' => 'Action',
		'withdraw' => 'Withdraw',
		'payto_help_text' 					=> 'Provide us the account details to which we need to pay to',
		'withdraw_request_none_msg' 		=> 'No withdraw requests found',
		'withdraw_request_invalid_amount' 	=> 'Enter valid withdrawal amount',
		'withdraw_request_exist_err_msg' 	=> 'You cannot request again when there is an existing pending withdrawal.',
		'withdraw_amount_err_msg' 			=> 'Amount should not be greater than the amount available in the cleared balance!',
		'cancel_request_confirm'			=> 'Are you sure you want to cancel this request?',
		'cancel_request_submitted_suc_msg'	=> 'Withdraw request has been cancelled successfully',
		'withdrawal_wire_transfer_title'	=> 'Withdraw funds directly to any of your bank accounts through Bank Wire Transfer',
		'withdrawal_wire_transfer_note'		=> 'Place a withdraw request along with your bank account details and submit your request to us. We shall process and approve them.',
		'withdrawal_paypal_title'			=> 'Withdraw funds to your PayPal account',
		'withdrawal_paypal_note'			=> 'Place a withdraw request along with your PayPal account details and submit your request to us. We shall process and approve them.',
		'withdrawal_neft_title'				=> 'Withdraw funds to your NEFT account',
		'withdrawal_neft_note'				=> 'Place a withdraw request along with your NEFT account details and submit your request to us. We shall process and approve them.',
		'withdraw_amount_min_err_msg' 		=> 'Amount should not be less than VAR_MIN_AMOUNT',
		'currency_lbl'						=> 'Currency',
		'other_currency'					=> 'Other Currency Balances',
		'convert_funds'						=> 'Convert Funds',
		'method_lbl'						=> 'Method',
		'description_lbl'					=> 'Description',
		'fee_lbl'							=> 'Fee',
		'payment_method'					=> 'Payment method',
		'net_amount'						=> 'Net amount',
		'insufficient_fund_err_msg'			=> 'You don\'t have account balance in VAR_CURRENCY to withdraw. ',
		'Check_withdraw_balance_message' 	=> 'Requested for amount exceeds withdrawal balance limit',
		'from_balance' 						=> 'From Balance',
		'request_amount'					=> 'Request Amount',
		'amount_you_withdraw'				=> 'Amount you withdraw',
		'to_details'						=> 'To Details',
		'to_go_back_main_page'				=> 'to go back to main withdrawal page',
		'cancel_withdrawal_request'			=> 'Cancel Withdrawal Request',
		'withdrawal_amout'					=> 'Withdrawal Amount',
		'reason_for_cancel'					=> 'Reason for cancel',
		'choose_withdraw_method'			=> 'Choose the withdrawal method',
		'available_to_withdraw'				=> 'Available to withdraw',
		'currency_conversion_done'			=> 'Currency conversion done successfully',
	),
	'convert-funds'			=> array(
		'convert_fund_note_msg' 			=> 'Due to the diverse international base of our users on '.Config::get('site.site_name').' you may often handle multiple currencies which differ to your preferred local currency. You can manage multiple currencies using the currency convertor below, to convert different balances into your desired local currency.',
		'convert_amount_tip'				=> 'Amount to convert',
		'currency_lbl'				=> 'Currency',
		'total'				=> 'Total',
		'user_acc_bal_none_err_msg'				=> 'You don\'t have any balance in your account',
		'currency_balances'				=> 'Currency Balances',
	),
	'seller_request'	=> array(
		'request_to_become_seller' => 'Request to become a seller in :site_name',
		'request_seller_info_message' => 'Congrats for choosing :site_name online marketplace as your market to sell your products. This is the best place to put up your items for sale and make great businesses. Kindly take a few minutes to fill in the Become a seller request form. All requests are subject to review by :site_name and then approved if found appropriate. Once your request is approved, you can start listing your items for sale in :site_name. ',
		'subject' => 'Subject',
		'message_text' => 'Message Text',
		'we_have_received_request' => 'We have received your request',
		'your_request' => 'Request',
		'response' => 'Response',
		'not_processed_yet' => 'Not Processed Yet ',
		'request_posted_successfully' => 'Request Posted Successfully',
		'allowed' => 'Allowed',
		'rejected' => 'Rejected',
		'considerlater' => 'Will be considered later',
		'some_problem_posting_request' => 'There are some problem in posting request',
		'check_and_resubmit_request' => 'Kindly check the below errors and resubmit the request',
		'you_are_already_seller' => 'You are already been a seller!',
		'you_are_allowed_to_seller' => 'You are allowed to become seller now.',

	)
);