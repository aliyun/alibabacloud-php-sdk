<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $invoiceAmount;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceDetails;

    /**
     * @var string
     */
    public $invoiceNo;

    /**
     * @var string
     */
    public $sumAmount;
    protected $_name = [
        'invoiceAmount'  => 'InvoiceAmount',
        'invoiceCode'    => 'InvoiceCode',
        'invoiceDetails' => 'InvoiceDetails',
        'invoiceNo'      => 'InvoiceNo',
        'sumAmount'      => 'SumAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoiceAmount) {
            $res['InvoiceAmount'] = $this->invoiceAmount;
        }
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceDetails) {
            $res['InvoiceDetails'] = $this->invoiceDetails;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
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
        if (isset($map['InvoiceAmount'])) {
            $model->invoiceAmount = $map['InvoiceAmount'];
        }
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceDetails'])) {
            $model->invoiceDetails = $map['InvoiceDetails'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['SumAmount'])) {
            $model->sumAmount = $map['SumAmount'];
        }

        return $model;
    }
}
