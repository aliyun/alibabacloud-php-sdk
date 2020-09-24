<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ApplyInvoiceRequest extends Model
{
    /**
     * @var int
     */
    public $invoiceAmount;

    /**
     * @var int
     */
    public $customerId;

    /**
     * @var int
     */
    public $addressId;

    /**
     * @var int
     */
    public $invoicingType;

    /**
     * @var int
     */
    public $processWay;

    /**
     * @var string
     */
    public $applyUserNick;

    /**
     * @var int[]
     */
    public $selectedIds;

    /**
     * @var bool
     */
    public $invoiceByAmount;
    protected $_name = [
        'invoiceAmount'   => 'InvoiceAmount',
        'customerId'      => 'CustomerId',
        'addressId'       => 'AddressId',
        'invoicingType'   => 'InvoicingType',
        'processWay'      => 'ProcessWay',
        'applyUserNick'   => 'ApplyUserNick',
        'selectedIds'     => 'SelectedIds',
        'invoiceByAmount' => 'InvoiceByAmount',
    ];

    public function validate()
    {
        Model::validateRequired('invoiceAmount', $this->invoiceAmount, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('addressId', $this->addressId, true);
        Model::validateRequired('applyUserNick', $this->applyUserNick, true);
        Model::validateRequired('selectedIds', $this->selectedIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoiceAmount) {
            $res['InvoiceAmount'] = $this->invoiceAmount;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->invoicingType) {
            $res['InvoicingType'] = $this->invoicingType;
        }
        if (null !== $this->processWay) {
            $res['ProcessWay'] = $this->processWay;
        }
        if (null !== $this->applyUserNick) {
            $res['ApplyUserNick'] = $this->applyUserNick;
        }
        if (null !== $this->selectedIds) {
            $res['SelectedIds'] = $this->selectedIds;
        }
        if (null !== $this->invoiceByAmount) {
            $res['InvoiceByAmount'] = $this->invoiceByAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyInvoiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvoiceAmount'])) {
            $model->invoiceAmount = $map['InvoiceAmount'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['InvoicingType'])) {
            $model->invoicingType = $map['InvoicingType'];
        }
        if (isset($map['ProcessWay'])) {
            $model->processWay = $map['ProcessWay'];
        }
        if (isset($map['ApplyUserNick'])) {
            $model->applyUserNick = $map['ApplyUserNick'];
        }
        if (isset($map['SelectedIds'])) {
            if (!empty($map['SelectedIds'])) {
                $model->selectedIds = $map['SelectedIds'];
            }
        }
        if (isset($map['InvoiceByAmount'])) {
            $model->invoiceByAmount = $map['InvoiceByAmount'];
        }

        return $model;
    }
}
