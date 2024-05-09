<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses;

use AlibabaCloud\Tea\Model;

class invoiceInfos extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceData;

    /**
     * @var string
     */
    public $invoiceDate;

    /**
     * @var string
     */
    public $invoiceNumber;

    /**
     * @var string
     */
    public $invoiceType;
    protected $_name = [
        'amount'        => 'amount',
        'invoiceCode'   => 'invoice_code',
        'invoiceData'   => 'invoice_data',
        'invoiceDate'   => 'invoice_date',
        'invoiceNumber' => 'invoice_number',
        'invoiceType'   => 'invoice_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->invoiceCode) {
            $res['invoice_code'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceData) {
            $res['invoice_data'] = $this->invoiceData;
        }
        if (null !== $this->invoiceDate) {
            $res['invoice_date'] = $this->invoiceDate;
        }
        if (null !== $this->invoiceNumber) {
            $res['invoice_number'] = $this->invoiceNumber;
        }
        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoiceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['invoice_code'])) {
            $model->invoiceCode = $map['invoice_code'];
        }
        if (isset($map['invoice_data'])) {
            $model->invoiceData = $map['invoice_data'];
        }
        if (isset($map['invoice_date'])) {
            $model->invoiceDate = $map['invoice_date'];
        }
        if (isset($map['invoice_number'])) {
            $model->invoiceNumber = $map['invoice_number'];
        }
        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }

        return $model;
    }
}
