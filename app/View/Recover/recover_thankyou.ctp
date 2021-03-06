<?php
/**
 * Register form view (for guest role)
 *
 * @copyright (c) 2015 Bolt Softwares Pvt Ltd
 * @licence GNU Affero General Public License http://www.gnu.org/licenses/agpl-3.0.en.html
 */
$this->assign('title',	__('Recover an account'));
$this->Html->css('login.min', null, array('block' => 'css'));
$this->assign('page_classes', 'recover thank-you');
?>
<div class="grid">
	<div class="row">
		<div class="col6 push1 information">
			<h2><?php echo __('See you in your mailbox!'); ?></h2>
			<p>
				<?php echo __('We just sent you an email, please follow the instructions to recover your account on this device.'); ?>
			</p>
			<?php echo $this->element('public/recover/recover-explanations'); ?>
		</div>
		<div class="col4 push1 last">
			<div class="logo">
				<h1><span>Passbolt</span></h1>
			</div>
			<div class="register thank-you form feedback">
				<div class="graphical-feedback"><i class="fa fa-envelope-o huge"></i></div>
				<p>
					<strong><?php echo __('Email sent!'); ?></strong>
					<?php echo __('Please check your spam folder if you do not hear from us after a while.'); ?>
				</p>
			</div>
		</div>
	</div>
</div>
