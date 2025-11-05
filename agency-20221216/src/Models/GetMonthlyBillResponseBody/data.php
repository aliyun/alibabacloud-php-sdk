<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetMonthlyBillResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $billLinkCSV;

    /**
     * @var string
     */
    public $billLinkXLSX;

    /**
     * @var string
     */
    public $billOwner;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $invoiceLink;

    /**
     * @var bool
     */
    public $refundInvoiceFlag;

    /**
     * @var string
     */
    public $refundInvoiceLink;

    /**
     * @var string
     */
    public $spendingTime;
    protected $_name = [
        'billLinkCSV' => 'BillLinkCSV',
        'billLinkXLSX' => 'BillLinkXLSX',
        'billOwner' => 'BillOwner',
        'billType' => 'BillType',
        'invoiceLink' => 'InvoiceLink',
        'refundInvoiceFlag' => 'RefundInvoiceFlag',
        'refundInvoiceLink' => 'RefundInvoiceLink',
        'spendingTime' => 'SpendingTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billLinkCSV) {
            $res['BillLinkCSV'] = $this->billLinkCSV;
        }

        if (null !== $this->billLinkXLSX) {
            $res['BillLinkXLSX'] = $this->billLinkXLSX;
        }

        if (null !== $this->billOwner) {
            $res['BillOwner'] = $this->billOwner;
        }

        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->invoiceLink) {
            $res['InvoiceLink'] = $this->invoiceLink;
        }

        if (null !== $this->refundInvoiceFlag) {
            $res['RefundInvoiceFlag'] = $this->refundInvoiceFlag;
        }

        if (null !== $this->refundInvoiceLink) {
            $res['RefundInvoiceLink'] = $this->refundInvoiceLink;
        }

        if (null !== $this->spendingTime) {
            $res['SpendingTime'] = $this->spendingTime;
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
        if (isset($map['BillLinkCSV'])) {
            $model->billLinkCSV = $map['BillLinkCSV'];
        }

        if (isset($map['BillLinkXLSX'])) {
            $model->billLinkXLSX = $map['BillLinkXLSX'];
        }

        if (isset($map['BillOwner'])) {
            $model->billOwner = $map['BillOwner'];
        }

        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['InvoiceLink'])) {
            $model->invoiceLink = $map['InvoiceLink'];
        }

        if (isset($map['RefundInvoiceFlag'])) {
            $model->refundInvoiceFlag = $map['RefundInvoiceFlag'];
        }

        if (isset($map['RefundInvoiceLink'])) {
            $model->refundInvoiceLink = $map['RefundInvoiceLink'];
        }

        if (isset($map['SpendingTime'])) {
            $model->spendingTime = $map['SpendingTime'];
        }

        return $model;
    }
}
