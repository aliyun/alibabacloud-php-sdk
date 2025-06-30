<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module\items\invoiceDetails;

class items extends Model
{
    /**
     * @var string
     */
    public $amountWithTax;

    /**
     * @var string
     */
    public $amountWithoutTax;

    /**
     * @var string
     */
    public $billDate;

    /**
     * @var string
     */
    public $checkCode;

    /**
     * @var string
     */
    public $drawer;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
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
     * @var string
     */
    public $invoiceNo;

    /**
     * @var int
     */
    public $invoiceSubTaskId;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $invoiceTypeDesc;

    /**
     * @var string
     */
    public $machineCode;

    /**
     * @var string
     */
    public $ofdOssUrl;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $passwordArea;

    /**
     * @var string
     */
    public $pdfOssUrl;

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
     * @var string
     */
    public $sellerTaxNo;

    /**
     * @var string
     */
    public $smartCheckCode;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $taxRate;

    /**
     * @var string
     */
    public $totalAmountInWords;

    /**
     * @var string
     */
    public $xmlOssUrl;
    protected $_name = [
        'amountWithTax' => 'amount_with_tax',
        'amountWithoutTax' => 'amount_without_tax',
        'billDate' => 'bill_date',
        'checkCode' => 'check_code',
        'drawer' => 'drawer',
        'id' => 'id',
        'invoiceCode' => 'invoice_code',
        'invoiceDay' => 'invoice_day',
        'invoiceDetail' => 'invoice_detail',
        'invoiceDetails' => 'invoice_details',
        'invoiceLocation' => 'invoice_location',
        'invoiceNo' => 'invoice_no',
        'invoiceSubTaskId' => 'invoice_sub_task_id',
        'invoiceType' => 'invoice_type',
        'invoiceTypeDesc' => 'invoice_type_desc',
        'machineCode' => 'machine_code',
        'ofdOssUrl' => 'ofd_oss_url',
        'ossUrl' => 'oss_url',
        'passwordArea' => 'password_area',
        'pdfOssUrl' => 'pdf_oss_url',
        'purchaserBankAccountInfo' => 'purchaser_bank_account_info',
        'purchaserContactInfo' => 'purchaser_contact_info',
        'purchaserName' => 'purchaser_name',
        'purchaserTaxNo' => 'purchaser_tax_no',
        'recipient' => 'recipient',
        'remarks' => 'remarks',
        'reviewer' => 'reviewer',
        'sellerBankAccountInfo' => 'seller_bank_account_info',
        'sellerContactInfo' => 'seller_contact_info',
        'sellerName' => 'seller_name',
        'sellerTaxNo' => 'seller_tax_no',
        'smartCheckCode' => 'smart_check_code',
        'taxAmount' => 'tax_amount',
        'taxRate' => 'tax_rate',
        'totalAmountInWords' => 'total_amount_in_words',
        'xmlOssUrl' => 'xml_oss_url',
    ];

    public function validate()
    {
        if (\is_array($this->invoiceDetails)) {
            Model::validateArray($this->invoiceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->invoiceDetails)) {
                $res['invoice_details'] = [];
                $n1 = 0;
                foreach ($this->invoiceDetails as $item1) {
                    $res['invoice_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->ofdOssUrl) {
            $res['ofd_oss_url'] = $this->ofdOssUrl;
        }

        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }

        if (null !== $this->passwordArea) {
            $res['password_area'] = $this->passwordArea;
        }

        if (null !== $this->pdfOssUrl) {
            $res['pdf_oss_url'] = $this->pdfOssUrl;
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

        if (null !== $this->xmlOssUrl) {
            $res['xml_oss_url'] = $this->xmlOssUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['invoice_details'] as $item1) {
                    $model->invoiceDetails[$n1] = invoiceDetails::fromMap($item1);
                    ++$n1;
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

        if (isset($map['ofd_oss_url'])) {
            $model->ofdOssUrl = $map['ofd_oss_url'];
        }

        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }

        if (isset($map['password_area'])) {
            $model->passwordArea = $map['password_area'];
        }

        if (isset($map['pdf_oss_url'])) {
            $model->pdfOssUrl = $map['pdf_oss_url'];
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

        if (isset($map['xml_oss_url'])) {
            $model->xmlOssUrl = $map['xml_oss_url'];
        }

        return $model;
    }
}
