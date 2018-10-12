<div class="dokan-product-inventory dokan-edit-row <?php echo $class; ?>">
    <div class="dokan-section-heading" data-togglehandler="dokan_product_inventory">
        <h2><i class="fa fa-cubes" aria-hidden="true"></i> <?php _e( 'Inventory', 'dokan-lite' ); ?></h2>
        <p><?php _e( 'Manage inventory for this product.', 'dokan-lite' ); ?></p>
        <a href="#" class="dokan-section-toggle">
            <i class="fa fa-sort-desc fa-flip-vertical" aria-hidden="true"></i>
        </a>
        <div class="dokan-clearfix"></div>
    </div>

    <div class="dokan-section-content">

        <div class="content-half-part dokan-form-group hide_if_variation">
            <label for="_sku" class="form-label"><?php _e( 'SKU', 'dokan-lite' ); ?> <span><?php _e( '(Stock Keeping Unit)', 'dokan-lite' ); ?></span></label>
            <?php dokan_post_input_box( $post_id, '_sku' ); ?>
        </div>

        <div class="content-half-part hide_if_variable">
            <label for="_stock_status" class="form-label"><?php _e( 'Stock Status', 'dokan-lite' ); ?></label>

            <?php dokan_post_input_box( $post_id, '_stock_status', array( 'options' => array(
                'instock'     => __( 'In Stock', 'dokan-lite' ),
                'outofstock' => __( 'Out of Stock', 'dokan-lite' ),
            ) ), 'select' ); ?>
        </div>

        <div class="dokan-clearfix"></div>

        <div class="dokan-form-group hide_if_variation hide_if_grouped">
            <?php dokan_post_input_box( $post_id, '_manage_stock', array( 'label' => __( 'Enable product stock management', 'dokan-lite' ) ), 'checkbox' ); ?>
        </div>

        <div class="show_if_stock dokan-stock-management-wrapper dokan-form-group dokan-clearfix">

            <div class="content-half-part hide_if_variation">
                <label for="_stock" class="form-label"><?php _e( 'Quantity', 'dokan-lite' ); ?></label>
                <input type="number" class="dokan-form-control" name="_stock" placeholder="<?php __( '1', 'dokan-lite' ); ?>" value="<?php echo wc_stock_amount( $_stock ); ?>" min="0" step="1">
            </div>

            <div class="content-half-part hide_if_variation last-child">
                <label for="_backorders" class="form-label"><?php _e( 'Allow Backorders', 'dokan-lite' ); ?></label>

                <?php dokan_post_input_box( $post_id, '_backorders', array( 'options' => array(
                    'no'     => __( 'Do not allow', 'dokan-lite' ),
                    'notify' => __( 'Allow but notify customer', 'dokan-lite' ),
                    'yes'    => __( 'Allow', 'dokan-lite' )
                ) ), 'select' ); ?>
            </div>
            <div class="dokan-clearfix"></div>
        </div><!-- .show_if_stock -->

        <div class="dokan-form-group hide_if_grouped">
            <label class="" for="_sold_individually">
                <input name="_sold_individually" id="_sold_individually" value="yes" type="checkbox" <?php checked( $_sold_individually, 'yes' ); ?>>
                <?php _e( 'Allow only one quantity of this product to be bought in a single order', 'dokan-lite' ) ?>
            </label>
        </div>

        <?php if ( $post_id ): ?>
            <?php do_action( 'dokan_product_edit_after_inventory' ); ?>
        <?php endif; ?>

        <?php do_action( 'dokan_product_edit_after_downloadable', $post, $post_id ); ?>
        <?php do_action( 'dokan_product_edit_after_sidebar', $post, $post_id ); ?>
        <?php do_action( 'dokan_single_product_edit_after_sidebar', $post, $post_id ); ?>

    </div><!-- .dokan-side-right -->
</div><!-- .dokan-product-inventory -->
