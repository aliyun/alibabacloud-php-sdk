<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 02702870934284730434
     *
     * @var string
     */
    public $antiFakeCode;

    /**
     * @var string
     */
    public $checker;

    /**
     * @var string
     */
    public $clerk;

    /**
     * @example 200.00
     *
     * @var string
     */
    public $invoiceAmount;

    /**
     * @example 031001600311
     *
     * @var string
     */
    public $invoiceCode;

    /**
     * @example 20190415
     *
     * @var string
     */
    public $invoiceDate;

    /**
     * @example 03753869
     *
     * @var string
     */
    public $invoiceNo;

    /**
     * @description 1
     *
     * @var string[]
     */
    public $itemName;

    /**
     * @var string
     */
    public $payee;

    /**
     * @var string
     */
    public $payeeAddress;

    /**
     * @var string
     */
    public $payeeBankName;

    /**
     * @var string
     */
    public $payeeName;

    /**
     * @example 91420200000123403
     *
     * @var string
     */
    public $payeeRegisterNo;

    /**
     * @var string
     */
    public $payerAddress;

    /**
     * @example 6221************1234
     *
     * @var string
     */
    public $payerBankName;

    /**
     * @var string
     */
    public $payerName;

    /**
     * @example 91420200000123403
     *
     * @var string
     */
    public $payerRegisterNo;

    /**
     * @example 87
     *
     * @var string
     */
    public $sumAmount;

    /**
     * @example 9.52
     *
     * @var string
     */
    public $taxAmount;

    /**
     * @example 190.48
     *
     * @var string
     */
    public $withoutTaxAmount;
    protected $_name = [
        'antiFakeCode'     => 'AntiFakeCode',
        'checker'          => 'Checker',
        'clerk'            => 'Clerk',
        'invoiceAmount'    => 'InvoiceAmount',
        'invoiceCode'      => 'InvoiceCode',
        'invoiceDate'      => 'InvoiceDate',
        'invoiceNo'        => 'InvoiceNo',
        'itemName'         => 'ItemName',
        'payee'            => 'Payee',
        'payeeAddress'     => 'PayeeAddress',
        'payeeBankName'    => 'PayeeBankName',
        'payeeName'        => 'PayeeName',
        'payeeRegisterNo'  => 'PayeeRegisterNo',
        'payerAddress'     => 'PayerAddress',
        'payerBankName'    => 'PayerBankName',
        'payerName'        => 'PayerName',
        'payerRegisterNo'  => 'PayerRegisterNo',
        'sumAmount'        => 'SumAmount',
        'taxAmount'        => 'TaxAmount',
        'withoutTaxAmount' => 'WithoutTaxAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antiFakeCode) {
            $res['AntiFakeCode'] = $this->antiFakeCode;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->clerk) {
            $res['Clerk'] = $this->clerk;
        }
        if (null !== $this->invoiceAmount) {
            $res['InvoiceAmount'] = $this->invoiceAmount;
        }
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDate) {
            $res['InvoiceDate'] = $this->invoiceDate;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->payee) {
            $res['Payee'] = $this->payee;
        }
        if (null !== $this->payeeAddress) {
            $res['PayeeAddress'] = $this->payeeAddress;
        }
        if (null !== $this->payeeBankName) {
            $res['PayeeBankName'] = $this->payeeBankName;
        }
        if (null !== $this->payeeName) {
            $res['PayeeName'] = $this->payeeName;
        }
        if (null !== $this->payeeRegisterNo) {
            $res['PayeeRegisterNo'] = $this->payeeRegisterNo;
        }
        if (null !== $this->payerAddress) {
            $res['PayerAddress'] = $this->payerAddress;
        }
        if (null !== $this->payerBankName) {
            $res['PayerBankName'] = $this->payerBankName;
        }
        if (null !== $this->payerName) {
            $res['PayerName'] = $this->payerName;
        }
        if (null !== $this->payerRegisterNo) {
            $res['PayerRegisterNo'] = $this->payerRegisterNo;
        }
        if (null !== $this->sumAmount) {
            $res['SumAmount'] = $this->sumAmount;
        }
        if (null !== $this->taxAmount) {
            $res['TaxAmount'] = $this->taxAmount;
        }
        if (null !== $this->withoutTaxAmount) {
            $res['WithoutTaxAmount'] = $this->withoutTaxAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntiFakeCode'])) {
            $model->antiFakeCode = $map['AntiFakeCode'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['Clerk'])) {
            $model->clerk = $map['Clerk'];
        }
        if (isset($map['InvoiceAmount'])) {
            $model->invoiceAmount = $map['InvoiceAmount'];
        }
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceDate'])) {
            $model->invoiceDate = $map['InvoiceDate'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['ItemName'])) {
            if (!empty($map['ItemName'])) {
                $model->itemName = $map['ItemName'];
            }
        }
        if (isset($map['Payee'])) {
            $model->payee = $map['Payee'];
        }
        if (isset($map['PayeeAddress'])) {
            $model->payeeAddress = $map['PayeeAddress'];
        }
        if (isset($map['PayeeBankName'])) {
            $model->payeeBankName = $map['PayeeBankName'];
        }
        if (isset($map['PayeeName'])) {
            $model->payeeName = $map['PayeeName'];
        }
        if (isset($map['PayeeRegisterNo'])) {
            $model->payeeRegisterNo = $map['PayeeRegisterNo'];
        }
        if (isset($map['PayerAddress'])) {
            $model->payerAddress = $map['PayerAddress'];
        }
        if (isset($map['PayerBankName'])) {
            $model->payerBankName = $map['PayerBankName'];
        }
        if (isset($map['PayerName'])) {
            $model->payerName = $map['PayerName'];
        }
        if (isset($map['PayerRegisterNo'])) {
            $model->payerRegisterNo = $map['PayerRegisterNo'];
        }
        if (isset($map['SumAmount'])) {
            $model->sumAmount = $map['SumAmount'];
        }
        if (isset($map['TaxAmount'])) {
            $model->taxAmount = $map['TaxAmount'];
        }
        if (isset($map['WithoutTaxAmount'])) {
            $model->withoutTaxAmount = $map['WithoutTaxAmount'];
        }

        return $model;
    }
}
