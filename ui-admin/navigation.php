<?php if (!defined('ABSPATH')) die('No direct access allowed!'); ?>

<h2>
    <a class="nav-tab <?php if ( $_GET['tab'] == 'general' )  echo 'nav-tab-active'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=general&sub=credits"><?php _e( 'General', $this->text_domain ); ?></a>
    <a class="nav-tab <?php if ( $_GET['tab'] == 'payments' ) echo 'nav-tab-active'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=payments&sub=paypal"><?php _e( 'Payments', $this->text_domain ); ?></a>
</h2>

<?php if ( $sub == 'credits' ): ?>
<ul>
    <li class="subsubsub"><h3><a class="<?php if ( $_GET['sub'] == 'credits' )   echo 'current'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=general&sub=credits"><?php _e( 'Credits', $this->text_domain ); ?></a> | </h3></li>
    <li class="subsubsub"><h3><a class="<?php if ( $_GET['sub'] == 'something' ) echo 'current'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=general&sub=something"><?php _e( 'Something', $this->text_domain ); ?></a></h3></li>
</ul>
<?php endif; ?>

<?php if ( $sub == 'paypal' || $sub == 'authorizenet'  ): ?>
<ul>
    <li class="subsubsub"><h3><a class="<?php if ( $_GET['sub'] == 'paypal' )       echo 'current'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=payments&sub=paypal"><?php _e( 'PayPal Express', $this->text_domain ); ?></a> | </h3></li>
    <li class="subsubsub"><h3><a class="<?php if ( $_GET['sub'] == 'authorizenet' ) echo 'current'; ?>" href="admin.php?page=<?php echo $this->sub_menu_slug; ?>&tab=payments&sub=authorizenet"><?php _e( 'Authorize.net', $this->text_domain ); ?></a></h3></li>
</ul>
<?php endif; ?>