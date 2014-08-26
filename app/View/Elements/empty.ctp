ALTER TABLE `sales_flat_order` ADD `insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order` ADD `base_insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order_address` ADD `insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order_address` ADD `base_insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order` ADD `insurance_amount_invoiced` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order` ADD `base_insurance_amount_invoiced` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_invoice` ADD `insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_invoice` ADD `base_insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order` ADD `insurance_amount_refunded` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_order` ADD `base_insurance_amount_refunded` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_credit_memo` ADD `insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
ALTER TABLE `sales_flat_credit_memo` ADD `base_insurance_amount` DECIMAL( 10, 2 ) NOT NULL;
