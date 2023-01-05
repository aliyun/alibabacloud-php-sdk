<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 81931914902643039780
     *
     * @var string
     */
    public $antiFakeCode;

    /**
     * @example 044031860107
     *
     * @var string
     */
    public $invoiceCode;

    /**
     * @example 2018-09-20
     *
     * @var string
     */
    public $invoiceDate;

    /**
     * @example 09267581
     *
     * @var string
     */
    public $invoiceNumber;

    /**
     * @var string
     */
    public $payeeName;

    /**
     * @example 914403002794492693
     *
     * @var string
     */
    public $payeeRegisterNo;

    /**
     * @var string
     */
    public $payerName;

    /**
     * @example 91440300MA5EXWHW6F
     *
     * @var string
     */
    public $payerRegisterNo;

    /**
     * @example ￥220.00
     *
     * @var string
     */
    public $sumAmount;
    protected $_name = [
        'antiFakeCode'    => 'AntiFakeCode',
        'invoiceCode'     => 'InvoiceCode',
        'invoiceDate'     => 'InvoiceDate',
        'invoiceNumber'   => 'InvoiceNumber',
        'payeeName'       => 'PayeeName',
        'payeeRegisterNo' => 'PayeeRegisterNo',
        'payerName'       => 'PayerName',
        'payerRegisterNo' => 'PayerRegisterNo',
        'sumAmount'       => 'SumAmount',
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
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDate) {
            $res['InvoiceDate'] = $this->invoiceDate;
        }
        if (null !== $this->invoiceNumber) {
            $res['InvoiceNumber'] = $this->invoiceNumber;
        }
        if (null !== $this->payeeName) {
            $res['PayeeName'] = $this->payeeName;
        }
        if (null !== $this->payeeRegisterNo) {
            $res['PayeeRegisterNo'] = $this->payeeRegisterNo;
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
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceDate'])) {
            $model->invoiceDate = $map['InvoiceDate'];
        }
        if (isset($map['InvoiceNumber'])) {
            $model->invoiceNumber = $map['InvoiceNumber'];
        }
        if (isset($map['PayeeName'])) {
            $model->payeeName = $map['PayeeName'];
        }
        if (isset($map['PayeeRegisterNo'])) {
            $model->payeeRegisterNo = $map['PayeeRegisterNo'];
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

        return $model;
    }
}
