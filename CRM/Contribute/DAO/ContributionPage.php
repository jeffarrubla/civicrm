<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Contribute/ContributionPage.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:00d0eb39eb657241b67e9d5b12bc09d8)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Contribute_DAO_ContributionPage constructor.
 */
class CRM_Contribute_DAO_ContributionPage extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_contribution_page';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Contribution Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Contribution Page title. For top of page display
   *
   * @var string
   */
  public $title;
  /**
   * Text and html allowed. Displayed below title.
   *
   * @var text
   */
  public $intro_text;
  /**
   * default financial type assigned to contributions submitted via this page, e.g. Contribution, Campaign Contribution
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * Payment Processors configured for this contribution Page
   *
   * @var string
   */
  public $payment_processor;
  /**
   * if true - processing logic must reject transaction at confirmation stage if pay method != credit card
   *
   * @var boolean
   */
  public $is_credit_card_only;
  /**
   * if true - allows real-time monetary transactions otherwise non-monetary transactions
   *
   * @var boolean
   */
  public $is_monetary;
  /**
   * if true - allows recurring contributions, valid only for PayPal_Standard
   *
   * @var boolean
   */
  public $is_recur;
  /**
   * if false, the confirm page in contribution pages gets skipped
   *
   * @var boolean
   */
  public $is_confirm_enabled;
  /**
   * Supported recurring frequency units.
   *
   * @var string
   */
  public $recur_frequency_unit;
  /**
   * if true - supports recurring intervals
   *
   * @var boolean
   */
  public $is_recur_interval;
  /**
   * if true - asks user for recurring installments
   *
   * @var boolean
   */
  public $is_recur_installments;
  /**
   * if true - user is able to adjust payment start date
   *
   * @var boolean
   */
  public $adjust_recur_start_date;
  /**
   * if true - allows the user to send payment directly to the org later
   *
   * @var boolean
   */
  public $is_pay_later;
  /**
   * The text displayed to the user in the main form
   *
   * @var text
   */
  public $pay_later_text;
  /**
   * The receipt sent to the user instead of the normal receipt text
   *
   * @var text
   */
  public $pay_later_receipt;
  /**
   * is partial payment enabled for this online contribution page
   *
   * @var boolean
   */
  public $is_partial_payment;
  /**
   * Initial amount label for partial payment
   *
   * @var string
   */
  public $initial_amount_label;
  /**
   * Initial amount help text for partial payment
   *
   * @var text
   */
  public $initial_amount_help_text;
  /**
   * Minimum initial amount for partial payment
   *
   * @var float
   */
  public $min_initial_amount;
  /**
   * if true, page will include an input text field where user can enter their own amount
   *
   * @var boolean
   */
  public $is_allow_other_amount;
  /**
   * FK to civicrm_option_value.
   *
   * @var int unsigned
   */
  public $default_amount_id;
  /**
   * if other amounts allowed, user can configure minimum allowed.
   *
   * @var float
   */
  public $min_amount;
  /**
   * if other amounts allowed, user can configure maximum allowed.
   *
   * @var float
   */
  public $max_amount;
  /**
   * The target goal for this page, allows people to build a goal meter
   *
   * @var float
   */
  public $goal_amount;
  /**
   * Title for Thank-you page (header title tag, and display at the top of the page).
   *
   * @var string
   */
  public $thankyou_title;
  /**
   * text and html allowed. displayed above result on success page
   *
   * @var text
   */
  public $thankyou_text;
  /**
   * Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.
   *
   * @var text
   */
  public $thankyou_footer;
  /**
   * if true, receipt is automatically emailed to contact on success
   *
   * @var boolean
   */
  public $is_email_receipt;
  /**
   * FROM email name used for receipts generated by contributions to this contribution page.
   *
   * @var string
   */
  public $receipt_from_name;
  /**
   * FROM email address used for receipts generated by contributions to this contribution page.
   *
   * @var string
   */
  public $receipt_from_email;
  /**
   * comma-separated list of email addresses to cc each time a receipt is sent
   *
   * @var string
   */
  public $cc_receipt;
  /**
   * comma-separated list of email addresses to bcc each time a receipt is sent
   *
   * @var string
   */
  public $bcc_receipt;
  /**
   * text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now
   *
   * @var text
   */
  public $receipt_text;
  /**
   * Is this property active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Text and html allowed. Displayed at the bottom of the first page of the contribution wizard.
   *
   * @var text
   */
  public $footer_text;
  /**
   * Is this property active?
   *
   * @var boolean
   */
  public $amount_block_is_active;
  /**
   * Date and time that this page starts.
   *
   * @var datetime
   */
  public $start_date;
  /**
   * Date and time that this page ends. May be NULL if no defined end date/time
   *
   * @var datetime
   */
  public $end_date;
  /**
   * FK to civicrm_contact, who created this contribution page
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time that contribution page was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * The campaign for which we are collecting contributions with this page.
   *
   * @var int unsigned
   */
  public $campaign_id;
  /**
   * Can people share the contribution page through social media?
   *
   * @var boolean
   */
  public $is_share;
  /**
   * if true - billing block is required for online contribution page
   *
   * @var boolean
   */
  public $is_billing_required;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_contribution_page';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'campaign_id', 'civicrm_campaign', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Page ID') ,
          'description' => 'Contribution Id',
          'required' => true,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contribution Page Title') ,
          'description' => 'Contribution Page title. For top of page display',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'intro_text' => array(
          'name' => 'intro_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Contribution Page Introduction Text') ,
          'description' => 'Text and html allowed. Displayed below title.',
          'rows' => 6,
          'cols' => 50,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type') ,
          'description' => 'default financial type assigned to contributions submitted via this page, e.g. Contribution, Campaign Contribution',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'payment_processor' => array(
          'name' => 'payment_processor',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Payment Processor') ,
          'description' => 'Payment Processors configured for this contribution Page',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_payment_processor',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'is_credit_card_only' => array(
          'name' => 'is_credit_card_only',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Credit Card Only?') ,
          'description' => 'if true - processing logic must reject transaction at confirmation stage if pay method != credit card',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_monetary' => array(
          'name' => 'is_monetary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Monetary') ,
          'description' => 'if true - allows real-time monetary transactions otherwise non-monetary transactions',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_recur' => array(
          'name' => 'is_recur',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Recurring') ,
          'description' => 'if true - allows recurring contributions, valid only for PayPal_Standard',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_confirm_enabled' => array(
          'name' => 'is_confirm_enabled',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Confirmation Page?') ,
          'description' => 'if false, the confirm page in contribution pages gets skipped',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'recur_frequency_unit' => array(
          'name' => 'recur_frequency_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Recurring Frequency') ,
          'description' => 'Supported recurring frequency units.',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_recur_interval' => array(
          'name' => 'is_recur_interval',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Support Recurring Intervals') ,
          'description' => 'if true - supports recurring intervals',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_recur_installments' => array(
          'name' => 'is_recur_installments',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Recurring Installments?') ,
          'description' => 'if true - asks user for recurring installments',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'adjust_recur_start_date' => array(
          'name' => 'adjust_recur_start_date',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Adjust Recurring Start Date') ,
          'description' => 'if true - user is able to adjust payment start date',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_pay_later' => array(
          'name' => 'is_pay_later',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Pay Later') ,
          'description' => 'if true - allows the user to send payment directly to the org later',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'pay_later_text' => array(
          'name' => 'pay_later_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Pay Later Text') ,
          'description' => 'The text displayed to the user in the main form',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'pay_later_receipt' => array(
          'name' => 'pay_later_receipt',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Pay Later Receipt') ,
          'description' => 'The receipt sent to the user instead of the normal receipt text',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'is_partial_payment' => array(
          'name' => 'is_partial_payment',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Allow Partial Payment') ,
          'description' => 'is partial payment enabled for this online contribution page',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'initial_amount_label' => array(
          'name' => 'initial_amount_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Initial Amount Label') ,
          'description' => 'Initial amount label for partial payment',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'initial_amount_help_text' => array(
          'name' => 'initial_amount_help_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Initial Amount Help Text') ,
          'description' => 'Initial amount help text for partial payment',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'min_initial_amount' => array(
          'name' => 'min_initial_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Min Initial Amount') ,
          'description' => 'Minimum initial amount for partial payment',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_allow_other_amount' => array(
          'name' => 'is_allow_other_amount',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Allow Other Amounts') ,
          'description' => 'if true, page will include an input text field where user can enter their own amount',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'default_amount_id' => array(
          'name' => 'default_amount_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Default Amount') ,
          'description' => 'FK to civicrm_option_value.',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'min_amount' => array(
          'name' => 'min_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Minimum Amount') ,
          'description' => 'if other amounts allowed, user can configure minimum allowed.',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'max_amount' => array(
          'name' => 'max_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Maximum Amount') ,
          'description' => 'if other amounts allowed, user can configure maximum allowed.',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'goal_amount' => array(
          'name' => 'goal_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Goal Amount') ,
          'description' => 'The target goal for this page, allows people to build a goal meter',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'thankyou_title' => array(
          'name' => 'thankyou_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Thank-you Title') ,
          'description' => 'Title for Thank-you page (header title tag, and display at the top of the page).',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'thankyou_text' => array(
          'name' => 'thankyou_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Text') ,
          'description' => 'text and html allowed. displayed above result on success page',
          'rows' => 8,
          'cols' => 60,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'thankyou_footer' => array(
          'name' => 'thankyou_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Thank-you Footer') ,
          'description' => 'Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.',
          'rows' => 8,
          'cols' => 60,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'is_email_receipt' => array(
          'name' => 'is_email_receipt',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Send email Receipt') ,
          'description' => 'if true, receipt is automatically emailed to contact on success',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'receipt_from_name' => array(
          'name' => 'receipt_from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From') ,
          'description' => 'FROM email name used for receipts generated by contributions to this contribution page.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
        ) ,
        'receipt_from_email' => array(
          'name' => 'receipt_from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt From email') ,
          'description' => 'FROM email address used for receipts generated by contributions to this contribution page.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'cc_receipt' => array(
          'name' => 'cc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt cc') ,
          'description' => 'comma-separated list of email addresses to cc each time a receipt is sent',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'bcc_receipt' => array(
          'name' => 'bcc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Receipt bcc') ,
          'description' => 'comma-separated list of email addresses to bcc each time a receipt is sent',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'receipt_text' => array(
          'name' => 'receipt_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Receipt Text') ,
          'description' => 'text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now',
          'rows' => 6,
          'cols' => 50,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Page Active?') ,
          'description' => 'Is this property active?',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'footer_text' => array(
          'name' => 'footer_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Footer Text') ,
          'description' => 'Text and html allowed. Displayed at the bottom of the first page of the contribution wizard.',
          'rows' => 6,
          'cols' => 50,
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 1,
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'amount_block_is_active' => array(
          'name' => 'amount_block_is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Amount Block Active?') ,
          'description' => 'Is this property active?',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page Start Date') ,
          'description' => 'Date and time that this page starts.',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page End Date') ,
          'description' => 'Date and time that this page ends. May be NULL if no defined end date/time',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Page Created By') ,
          'description' => 'FK to civicrm_contact, who created this contribution page',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Contribution Page Created Date') ,
          'description' => 'Date and time that contribution page was created.',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contribution Page Currency') ,
          'description' => '3 character string, value from config setting or input via user.',
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          )
        ) ,
        'campaign_id' => array(
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Page Campaign ID') ,
          'description' => 'The campaign for which we are collecting contributions with this page.',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'pseudoconstant' => array(
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'is_share' => array(
          'name' => 'is_share',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Contribution Page Shared?') ,
          'description' => 'Can people share the contribution page through social media?',
          'default' => '1',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
        'is_billing_required' => array(
          'name' => 'is_billing_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is billing block required') ,
          'description' => 'if true - billing block is required for online contribution page',
          'table_name' => 'civicrm_contribution_page',
          'entity' => 'ContributionPage',
          'bao' => 'CRM_Contribute_BAO_ContributionPage',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_page', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_page', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
