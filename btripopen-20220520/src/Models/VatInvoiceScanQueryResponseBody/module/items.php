<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module;

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
     * @example https://www.testurl.com
     *
     * @var string
     */
    public $ossUrl;

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
    public $sellerName;

    /**
     * @example 91441111111111111N
     *
     * @var string
     */
    public $sellerTaxNo;

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
    protected $_name = [
        'amountWithTax'    => 'amount_with_tax',
        'amountWithoutTax' => 'amount_without_tax',
        'billDate'         => 'bill_date',
        'invoiceCode'      => 'invoice_code',
        'invoiceDay'       => 'invoice_day',
        'invoiceDetail'    => 'invoice_detail',
        'invoiceNo'        => 'invoice_no',
        'invoiceSubTaskId' => 'invoice_sub_task_id',
        'invoiceType'      => 'invoice_type',
        'invoiceTypeDesc'  => 'invoice_type_desc',
        'ossUrl'           => 'oss_url',
        'purchaserName'    => 'purchaser_name',
        'purchaserTaxNo'   => 'purchaser_tax_no',
        'sellerName'       => 'seller_name',
        'sellerTaxNo'      => 'seller_tax_no',
        'taxAmount'        => 'tax_amount',
        'taxRate'          => 'tax_rate',
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
        if (null !== $this->invoiceCode) {
            $res['invoice_code'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDay) {
            $res['invoice_day'] = $this->invoiceDay;
        }
        if (null !== $this->invoiceDetail) {
            $res['invoice_detail'] = $this->invoiceDetail;
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
        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }
        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }
        if (null !== $this->sellerName) {
            $res['seller_name'] = $this->sellerName;
        }
        if (null !== $this->sellerTaxNo) {
            $res['seller_tax_no'] = $this->sellerTaxNo;
        }
        if (null !== $this->taxAmount) {
            $res['tax_amount'] = $this->taxAmount;
        }
        if (null !== $this->taxRate) {
            $res['tax_rate'] = $this->taxRate;
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
        if (isset($map['invoice_code'])) {
            $model->invoiceCode = $map['invoice_code'];
        }
        if (isset($map['invoice_day'])) {
            $model->invoiceDay = $map['invoice_day'];
        }
        if (isset($map['invoice_detail'])) {
            $model->invoiceDetail = $map['invoice_detail'];
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
        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }
        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }
        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }
        if (isset($map['seller_name'])) {
            $model->sellerName = $map['seller_name'];
        }
        if (isset($map['seller_tax_no'])) {
            $model->sellerTaxNo = $map['seller_tax_no'];
        }
        if (isset($map['tax_amount'])) {
            $model->taxAmount = $map['tax_amount'];
        }
        if (isset($map['tax_rate'])) {
            $model->taxRate = $map['tax_rate'];
        }

        return $model;
    }
}
