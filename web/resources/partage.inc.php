<div class="btn-share share-<?php echo $share_direction; if (isset($share_blanc) && $share_blanc==true) echo ' share-blanc'; ?>" data-section="<?php echo isset($share_section) ? $share_section : ''; ?>">
  <div class="sh-cont">
   <?php if ($share_direction!='right') { ?><div class="sh-texte"><a href="javascript:void(0);"><?php __p(array('share')); ?></a></div><?php } ?>
    <div class="sh-apps">
      <a href="javasript:void(0);" class="sh-app sh-facebook"></a>
      <a href="javasript:void(0);" class="sh-app sh-twitter"></a>
      <a href="javasript:void(0);" class="sh-app sh-whatsapp visible-xs-inline-block"></a>
      <a href="javasript:void(0);" class="sh-app sh-messenger"></a>
    </div>
   <?php if ($share_direction=='right') { ?><div class="sh-texte"><a href="javascript:void(0);"><?php __p(array('share')); ?></a></div><?php } ?>
  </div>
</div>
<?php  
  // reset after use
  $share_direction = '';
  $share_blanc = false;
  $share_section = '';
?>