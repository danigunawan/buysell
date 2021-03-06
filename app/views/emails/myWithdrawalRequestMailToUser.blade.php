@extends('mail')
@section('email_content')
    <div style="padding-bottom:25px; font:normal 13px Arial, Helvetica, sans-serif; color:#333;">{{trans('mail.hi')}} {{$user_name}},</div>

    <div style="line-height:18px;">
    	<!-- BEGIN: ALERT BLOCK -->
        <p style="background:#dff0d8; border:1px solid #d6e9c6; border-radius:4px; color:#3c763d; font:bold 14px Arial, Helvetica, sans-serif; margin:10px 0 20px; padding:10px 15px;">
            {{trans('mail.your_withdraw_request_submitted')}}
        </p>
        <!-- END: ALERT BLOCK -->

        <!-- BEGIN: USER WITHDRAW REQUEST DETAILS -->
        <div style="line-height:18px; padding:10px 20px; background:#fafafa;">
            <p style="margin:10px 0 20px 0; padding:0 0 5px 0; font:bold 16px Arial, Helvetica, sans-serif; color:#333; border-bottom:1px solid #eee;">{{trans('mail.withdraw_request_details')}} :</p>
            <table width="98%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="150" valign="top" align="left">
                        <p style="padding:0; margin:0 0 8px 0; color:#707070; font:normal 13px Arial, Helvetica, sans-serif;">{{trans('mail.request_amount')}} :</p>
                    </td>
                    <td valign="top" align="left">
                        <p style="padding:0;margin:0 0 8px 0;color:#1a1a1a; font:normal 13px Arial, Helvetica, sans-serif;">{{ $withdraw_currency }} {{ $withdraw_amount }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="150" valign="top" align="left">
                        <p style="padding:0; margin:0 0 8px 0; color:#707070; font:normal 13px Arial, Helvetica, sans-serif;">{{ $payment_method }} {{trans('mail.details')}} :</p>
                    </td>
                    <td valign="top" align="left"><p style="padding:0;margin:0 0 8px 0;color:#1a1a1a; font:normal 13px Arial, Helvetica, sans-serif;">{{ nl2br($pay_to_details) }}</p></td>
                </tr>
            </table>
        </div>
        <!-- END: USER WITHDRAW REQUEST DETAILS -->
    </div>
@stop
