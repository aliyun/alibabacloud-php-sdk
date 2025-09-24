<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class ApplyInvoiceRequest extends Model
{
    /**
     * @var int
     */
    public $addressId;

    /**
     * @var string
     */
    public $applyUserNick;

    /**
     * @var int
     */
    public $customerId;

    /**
     * @var int
     */
    public $invoiceAmount;

    /**
     * @var bool
     */
    public $invoiceByAmount;

    /**
     * @var int
     */
    public $invoicingType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $processWay;

    /**
     * @var int[]
     */
    public $selectedIds;

    /**
     * @var string
     */
    public $userRemark;

    /**
     * @var string
     */
    public $emails;
    protected $_name = [
        'addressId' => 'AddressId',
        'applyUserNick' => 'ApplyUserNick',
        'customerId' => 'CustomerId',
        'invoiceAmount' => 'InvoiceAmount',
        'invoiceByAmount' => 'InvoiceByAmount',
        'invoicingType' => 'InvoicingType',
        'ownerId' => 'OwnerId',
        'processWay' => 'ProcessWay',
        'selectedIds' => 'SelectedIds',
        'userRemark' => 'UserRemark',
        'emails' => 'emails',
    ];

    public function validate()
    {
        if (\is_array($this->selectedIds)) {
            Model::validateArray($this->selectedIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }

        if (null !== $this->applyUserNick) {
            $res['ApplyUserNick'] = $this->applyUserNick;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->invoiceAmount) {
            $res['InvoiceAmount'] = $this->invoiceAmount;
        }

        if (null !== $this->invoiceByAmount) {
            $res['InvoiceByAmount'] = $this->invoiceByAmount;
        }

        if (null !== $this->invoicingType) {
            $res['InvoicingType'] = $this->invoicingType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->processWay) {
            $res['ProcessWay'] = $this->processWay;
        }

        if (null !== $this->selectedIds) {
            if (\is_array($this->selectedIds)) {
                $res['SelectedIds'] = [];
                $n1 = 0;
                foreach ($this->selectedIds as $item1) {
                    $res['SelectedIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userRemark) {
            $res['UserRemark'] = $this->userRemark;
        }

        if (null !== $this->emails) {
            $res['emails'] = $this->emails;
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
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }

        if (isset($map['ApplyUserNick'])) {
            $model->applyUserNick = $map['ApplyUserNick'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['InvoiceAmount'])) {
            $model->invoiceAmount = $map['InvoiceAmount'];
        }

        if (isset($map['InvoiceByAmount'])) {
            $model->invoiceByAmount = $map['InvoiceByAmount'];
        }

        if (isset($map['InvoicingType'])) {
            $model->invoicingType = $map['InvoicingType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProcessWay'])) {
            $model->processWay = $map['ProcessWay'];
        }

        if (isset($map['SelectedIds'])) {
            if (!empty($map['SelectedIds'])) {
                $model->selectedIds = [];
                $n1 = 0;
                foreach ($map['SelectedIds'] as $item1) {
                    $model->selectedIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserRemark'])) {
            $model->userRemark = $map['UserRemark'];
        }

        if (isset($map['emails'])) {
            $model->emails = $map['emails'];
        }

        return $model;
    }
}
