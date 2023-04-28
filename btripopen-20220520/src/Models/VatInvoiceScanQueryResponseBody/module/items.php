<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module\items\invoiceDetails;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 20
     *
     * @var string
     */
    public $amountWithTax;

    /**
     * @example 18.87
     *
     * @var string
     */
    public $amountWithoutTax;

    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $billDate;

    /**
     * @example 07122942791187744475
     *
     * @var string
     */
    public $checkCode;

    /**
     * @var string
     */
    public $drawer;

    /**
     * @example 60
     *
     * @var string
     */
    public $id;

    /**
     * @example 3300111303
     *
     * @var string
     */
    public $invoiceCode;

    /**
     * @example 2022-12-01
     *
     * @var string
     */
    public $invoiceDay;

    /**
     * @var string
     */
    public $invoiceDetail;

    /**
     * @var invoiceDetails[]
     */
    public $invoiceDetails;

    /**
     * @var string
     */
    public $invoiceLocation;

    /**
     * @example 24021111
     *
     * @var string
     */
    public $invoiceNo;

    /**
     * @example 123
     *
     * @var int
     */
    public $invoiceSubTaskId;

    /**
     * @example 2
     *
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $invoiceTypeDesc;

    /**
     * @description 机器码
     *
     * @example 661619906841
     *
     * @var string
     */
    public $machineCode;

    /**
     * @example https://www.testurl.com
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @example <87*>>53>5023>-446>/4+83/5* *>5/81<75/1931>4>>
     *
     * @var string
     */
    public $passwordArea;

    /**
     * @var string
     */
    public $purchaserBankAccountInfo;

    /**
     * @var string
     */
    public $purchaserContactInfo;

    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @example 91441111111111111S
     *
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @var string
     */
    public $recipient;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $sellerBankAccountInfo;

    /**
     * @var string
     */
    public $sellerContactInfo;

    /**
     * @var string
     */
    public $sellerName;

    /**
     * @example 91441111111111111N
     *
     * @var string
     */
    public $sellerTaxNo;

    /**
     * @example 4475
     *
     * @var string
     */
    public $smartCheckCode;

    /**
     * @example 1.13
     *
     * @var string
     */
    public $taxAmount;

    /**
     * @example 6%
     *
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $totalAmountInWords;
    protected $_name = [
        'amountWithTax'            => 'amount_with_tax',
        'amountWithoutTax'         => 'amount_without_tax',
        'billDate'                 => 'bill_date',
        'checkCode'                => 'check_code',
        'drawer'                   => 'drawer',
        'id'                       => 'id',
        'invoiceCode'              => 'invoice_code',
        'invoiceDay'               => 'invoice_day',
        'invoiceDetail'            => 'invoice_detail',
        'invoiceDetails'           => 'invoice_details',
        'invoiceLocation'          => 'invoice_location',
        'invoiceNo'                => 'invoice_no',
        'invoiceSubTaskId'         => 'invoice_sub_task_id',
        'invoiceType'              => 'invoice_type',
        'invoiceTypeDesc'          => 'invoice_type_desc',
        'machineCode'              => 'machine_code',
        'ossUrl'                   => 'oss_url',
        'passwordArea'             => 'password_area',
        'purchaserBankAccountInfo' => 'purchaser_bank_account_info',
        'purchaserContactInfo'     => 'purchaser_contact_info',
        'purchaserName'            => 'purchaser_name',
        'purchaserTaxNo'           => 'purchaser_tax_no',
        'recipient'                => 'recipient',
        'remarks'                  => 'remarks',
        'reviewer'                 => 'reviewer',
        'sellerBankAccountInfo'    => 'seller_bank_account_info',
        'sellerContactInfo'        => 'seller_contact_info',
        'sellerName'               => 'seller_name',
        'sellerTaxNo'              => 'seller_tax_no',
        'smartCheckCode'           => 'smart_check_code',
        'taxAmount'                => 'tax_amount',
        'taxRate'                  => 'tax_rate',
        'totalAmountInWords'       => 'total_amount_in_words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amountWithTax) {
            $res['amount_with_tax'] = $this->amountWithTax;
        }
        if (null !== $this->amountWithoutTax) {
            $res['amount_without_tax'] = $this->amountWithoutTax;
        }
        if (null !== $this->billDate) {
            $res['bill_date'] = $this->billDate;
        }
        if (null !== $this->checkCode) {
            $res['check_code'] = $this->checkCode;
        }
        if (null !== $this->drawer) {
            $res['drawer'] = $this->drawer;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->invoiceCode) {
            $res['invoice_code'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDay) {
            $res['invoice_day'] = $this->invoiceDay;
        }
        if (null !== $this->invoiceDetail) {
            $res['invoice_detail'] = $this->invoiceDetail;
        }
        if (null !== $this->invoiceDetails) {
            $res['invoice_details'] = [];
            if (null !== $this->invoiceDetails && \is_array($this->invoiceDetails)) {
                $n = 0;
                foreach ($this->invoiceDetails as $item) {
                    $res['invoice_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceLocation) {
            $res['invoice_location'] = $this->invoiceLocation;
        }
        if (null !== $this->invoiceNo) {
            $res['invoice_no'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceSubTaskId) {
            $res['invoice_sub_task_id'] = $this->invoiceSubTaskId;
        }
        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }
        if (null !== $this->invoiceTypeDesc) {
            $res['invoice_type_desc'] = $this->invoiceTypeDesc;
        }
        if (null !== $this->machineCode) {
            $res['machine_code'] = $this->machineCode;
        }
        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }
        if (null !== $this->passwordArea) {
            $res['password_area'] = $this->passwordArea;
        }
        if (null !== $this->purchaserBankAccountInfo) {
            $res['purchaser_bank_account_info'] = $this->purchaserBankAccountInfo;
        }
        if (null !== $this->purchaserContactInfo) {
            $res['purchaser_contact_info'] = $this->purchaserContactInfo;
        }
        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }
        if (null !== $this->recipient) {
            $res['recipient'] = $this->recipient;
        }
        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }
        if (null !== $this->reviewer) {
            $res['reviewer'] = $this->reviewer;
        }
        if (null !== $this->sellerBankAccountInfo) {
            $res['seller_bank_account_info'] = $this->sellerBankAccountInfo;
        }
        if (null !== $this->sellerContactInfo) {
            $res['seller_contact_info'] = $this->sellerContactInfo;
        }
        if (null !== $this->sellerName) {
            $res['seller_name'] = $this->sellerName;
        }
        if (null !== $this->sellerTaxNo) {
            $res['seller_tax_no'] = $this->sellerTaxNo;
        }
        if (null !== $this->smartCheckCode) {
            $res['smart_check_code'] = $this->smartCheckCode;
        }
        if (null !== $this->taxAmount) {
            $res['tax_amount'] = $this->taxAmount;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
        }
        if (null !== $this->totalAmountInWords) {
            $res['total_amount_in_words'] = $this->totalAmountInWords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount_with_tax'])) {
            $model->amountWithTax = $map['amount_with_tax'];
        }
        if (isset($map['amount_without_tax'])) {
            $model->amountWithoutTax = $map['amount_without_tax'];
        }
        if (isset($map['bill_date'])) {
            $model->billDate = $map['bill_date'];
        }
        if (isset($map['check_code'])) {
            $model->checkCode = $map['check_code'];
        }
        if (isset($map['drawer'])) {
            $model->drawer = $map['drawer'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['invoice_code'])) {
            $model->invoiceCode = $map['invoice_code'];
        }
        if (isset($map['invoice_day'])) {
            $model->invoiceDay = $map['invoice_day'];
        }
        if (isset($map['invoice_detail'])) {
            $model->invoiceDetail = $map['invoice_detail'];
        }
        if (isset($map['invoice_details'])) {
            if (!empty($map['invoice_details'])) {
                $model->invoiceDetails = [];
                $n                     = 0;
                foreach ($map['invoice_details'] as $item) {
                    $model->invoiceDetails[$n++] = null !== $item ? invoiceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['invoice_location'])) {
            $model->invoiceLocation = $map['invoice_location'];
        }
        if (isset($map['invoice_no'])) {
            $model->invoiceNo = $map['invoice_no'];
        }
        if (isset($map['invoice_sub_task_id'])) {
            $model->invoiceSubTaskId = $map['invoice_sub_task_id'];
        }
        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }
        if (isset($map['invoice_type_desc'])) {
            $model->invoiceTypeDesc = $map['invoice_type_desc'];
        }
        if (isset($map['machine_code'])) {
            $model->machineCode = $map['machine_code'];
        }
        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }
        if (isset($map['password_area'])) {
            $model->passwordArea = $map['password_area'];
        }
        if (isset($map['purchaser_bank_account_info'])) {
            $model->purchaserBankAccountInfo = $map['purchaser_bank_account_info'];
        }
        if (isset($map['purchaser_contact_info'])) {
            $model->purchaserContactInfo = $map['purchaser_contact_info'];
        }
        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }
        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }
        if (isset($map['recipient'])) {
            $model->recipient = $map['recipient'];
        }
        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }
        if (isset($map['reviewer'])) {
            $model->reviewer = $map['reviewer'];
        }
        if (isset($map['seller_bank_account_info'])) {
            $model->sellerBankAccountInfo = $map['seller_bank_account_info'];
        }
        if (isset($map['seller_contact_info'])) {
            $model->sellerContactInfo = $map['seller_contact_info'];
        }
        if (isset($map['seller_name'])) {
            $model->sellerName = $map['seller_name'];
        }
        if (isset($map['seller_tax_no'])) {
            $model->sellerTaxNo = $map['seller_tax_no'];
        }
        if (isset($map['smart_check_code'])) {
            $model->smartCheckCode = $map['smart_check_code'];
        }
        if (isset($map['tax_amount'])) {
            $model->taxAmount = $map['tax_amount'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }
        if (isset($map['total_amount_in_words'])) {
            $model->totalAmountInWords = $map['total_amount_in_words'];
        }

        return $model;
    }
}
