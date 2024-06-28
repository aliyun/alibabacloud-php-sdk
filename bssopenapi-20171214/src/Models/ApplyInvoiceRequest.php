<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ApplyInvoiceRequest extends Model
{
    /**
     * @description The ID of the address to which the invoice is delivered. This parameter is required if the invoice is a paper invoice. Set the ID to the value of the AddressId parameter returned by calling the QueryCustomerAddressList operation.
     *
     * This parameter is required.
     * @example 237958367
     *
     * @var int
     */
    public $addressId;

    /**
     * @description The nickname of the applicant. The system does not verify the nickname.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $applyUserNick;

    /**
     * @description The ID of the customer. Set the ID to the value of the CustomerId parameter returned by calling the QueryInvoicingCustomerList operation.
     *
     * This parameter is required.
     * @example 124132423
     *
     * @var int
     */
    public $customerId;

    /**
     * @description The amount of the invoice. Unit: Cent.
     *
     * This parameter is required.
     * @example 124132
     *
     * @var int
     */
    public $invoiceAmount;

    /**
     * @description Specifies whether to invoice by amount. A value of true indicates that the user applies for the invoice based on the InvoiceAmount parameter. A value of false indicates that the user applies for the invoice based on the total amount of the invoicing items.
     *
     * @example true
     *
     * @var bool
     */
    public $invoiceByAmount;

    /**
     * @description The type of the invoice. Valid values:
     *
     *   0: paper invoice
     *   1: electronic invoice
     *
     * @example 1
     *
     * @var int
     */
    public $invoicingType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The channel that is used to process the invoice. A value of 0 indicates that the invoice is processed by Alibaba Cloud. A value of 1 indicates that the invoice is processed by the tax platform. Set the value to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $processWay;

    /**
     * @description The IDs of the selected invoicing items. Set the IDs to the IDs returned by calling the QueryEvaluateList operation.
     *
     * This parameter is required.
     * @example 384752367
     *
     * @var int[]
     */
    public $selectedIds;

    /**
     * @description The remarks made by the user.
     *
     * @example test
     *
     * @var string
     */
    public $userRemark;
    protected $_name = [
        'addressId'       => 'AddressId',
        'applyUserNick'   => 'ApplyUserNick',
        'customerId'      => 'CustomerId',
        'invoiceAmount'   => 'InvoiceAmount',
        'invoiceByAmount' => 'InvoiceByAmount',
        'invoicingType'   => 'InvoicingType',
        'ownerId'         => 'OwnerId',
        'processWay'      => 'ProcessWay',
        'selectedIds'     => 'SelectedIds',
        'userRemark'      => 'UserRemark',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SelectedIds'] = $this->selectedIds;
        }
        if (null !== $this->userRemark) {
            $res['UserRemark'] = $this->userRemark;
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
                $model->selectedIds = $map['SelectedIds'];
            }
        }
        if (isset($map['UserRemark'])) {
            $model->userRemark = $map['UserRemark'];
        }

        return $model;
    }
}
