<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponseBody\module;

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
     * @var string
     */
    public $costCenter;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $insuranceCompany;

    /**
     * @example T123343234242323232
     *
     * @var string
     */
    public $insuranceOrderId;

    /**
     * @var string
     */
    public $insuranceType;

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
     * @example 24021111
     *
     * @var string
     */
    public $invoiceNo;

    /**
     * @example 3137168772101111000
     *
     * @var int
     */
    public $orderId;

    /**
     * @example https://www.testurl.com
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $passenger;

    /**
     * @var string
     */
    public $project;

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
    public $realInvoiceTitle;

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
        'costCenter'       => 'cost_center',
        'department'       => 'department',
        'insuranceCompany' => 'insurance_company',
        'insuranceOrderId' => 'insurance_order_id',
        'insuranceType'    => 'insurance_type',
        'invoiceCode'      => 'invoice_code',
        'invoiceDay'       => 'invoice_day',
        'invoiceNo'        => 'invoice_no',
        'orderId'          => 'order_id',
        'ossUrl'           => 'oss_url',
        'passenger'        => 'passenger',
        'project'          => 'project',
        'purchaserName'    => 'purchaser_name',
        'purchaserTaxNo'   => 'purchaser_tax_no',
        'realInvoiceTitle' => 'real_invoice_title',
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
        if (null !== $this->costCenter) {
            $res['cost_center'] = $this->costCenter;
        }
        if (null !== $this->department) {
            $res['department'] = $this->department;
        }
        if (null !== $this->insuranceCompany) {
            $res['insurance_company'] = $this->insuranceCompany;
        }
        if (null !== $this->insuranceOrderId) {
            $res['insurance_order_id'] = $this->insuranceOrderId;
        }
        if (null !== $this->insuranceType) {
            $res['insurance_type'] = $this->insuranceType;
        }
        if (null !== $this->invoiceCode) {
            $res['invoice_code'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDay) {
            $res['invoice_day'] = $this->invoiceDay;
        }
        if (null !== $this->invoiceNo) {
            $res['invoice_no'] = $this->invoiceNo;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->ossUrl) {
            $res['oss_url'] = $this->ossUrl;
        }
        if (null !== $this->passenger) {
            $res['passenger'] = $this->passenger;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }
        if (null !== $this->realInvoiceTitle) {
            $res['real_invoice_title'] = $this->realInvoiceTitle;
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
        if (isset($map['cost_center'])) {
            $model->costCenter = $map['cost_center'];
        }
        if (isset($map['department'])) {
            $model->department = $map['department'];
        }
        if (isset($map['insurance_company'])) {
            $model->insuranceCompany = $map['insurance_company'];
        }
        if (isset($map['insurance_order_id'])) {
            $model->insuranceOrderId = $map['insurance_order_id'];
        }
        if (isset($map['insurance_type'])) {
            $model->insuranceType = $map['insurance_type'];
        }
        if (isset($map['invoice_code'])) {
            $model->invoiceCode = $map['invoice_code'];
        }
        if (isset($map['invoice_day'])) {
            $model->invoiceDay = $map['invoice_day'];
        }
        if (isset($map['invoice_no'])) {
            $model->invoiceNo = $map['invoice_no'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['oss_url'])) {
            $model->ossUrl = $map['oss_url'];
        }
        if (isset($map['passenger'])) {
            $model->passenger = $map['passenger'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }
        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }
        if (isset($map['real_invoice_title'])) {
            $model->realInvoiceTitle = $map['real_invoice_title'];
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
