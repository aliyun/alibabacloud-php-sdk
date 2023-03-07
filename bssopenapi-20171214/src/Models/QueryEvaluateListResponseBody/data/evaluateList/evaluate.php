<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;

use AlibabaCloud\Tea\Model;

class evaluate extends Model
{
    /**
     * @description The billing cycle.
     *
     * @example 202002
     *
     * @var string
     */
    public $billCycle;

    /**
     * @description The ID of the bill.
     *
     * @example 234543254325
     *
     * @var int
     */
    public $billId;

    /**
     * @description The time.
     *
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $bizTime;

    /**
     * @description The market type in the invoice. Valid values:
     *
     *   ALIYUN: Alibaba Cloud
     *   MARKETPLACE: Alibaba Cloud Marketplace
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The invoiceable amount.
     *
     * @example 123213
     *
     * @var int
     */
    public $canInvoiceAmount;

    /**
     * @description The creation time.
     *
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the invoice.
     *
     * @example 1325321532
     *
     * @var int
     */
    public $id;

    /**
     * @description The invoiced amount.
     *
     * @example 10000
     *
     * @var int
     */
    public $invoicedAmount;

    /**
     * @description The ID of the item.
     *
     * @example 23453245
     *
     * @var int
     */
    public $itemId;

    /**
     * @description The name of the object to be invoiced.
     *
     * @example Refund of a voucher with denomination marked
     *
     * @var string
     */
    public $name;

    /**
     * @description If a refund is issued due to an order such as an unsubscription order or a configuration downgrade order, the refund amount is used to offset the amount of the invoice. The value is consistent with the value of the **OffsetCostAmount** parameter.
     *
     * @example 500
     *
     * @var int
     */
    public $offsetAcceptAmount;

    /**
     * @description The refund amount used to offset the amount of the invoice. If a refund is issued due to an order such as an unsubscription order or a configuration downgrade order, the refund amount is used to offset the amount of the invoice. The value is consistent with the value of the **OffsetAcceptAmount** parameter.
     *
     * @example 500
     *
     * @var int
     */
    public $offsetCostAmount;

    /**
     * @description The ID of the external object.
     *
     * @example 12341
     *
     * @var string
     */
    public $opId;

    /**
     * @description The original amount.
     *
     * @example -10000
     *
     * @var int
     */
    public $originalAmount;

    /**
     * @description The ID of the external order.
     *
     * @example 124324213421
     *
     * @var string
     */
    public $outBizId;

    /**
     * @description The balance.
     *
     * @example -10000
     *
     * @var int
     */
    public $presentAmount;

    /**
     * @description The status of the invoiceable amount.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of orders that are queried. Valid values:
     *
     *   1: the orders in which the invoiceable amount is negative.
     *   2: the orders in which the invoiceable amount is positive.
     *   3: the orders in which the invoiceable amount is not 0.
     *   4: the orders in which the amount that has been invoiced is greater than 0.
     *
     * >  By default, this parameter is left empty. If this parameter is left empty, all orders are queried.
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description The ID of the user.
     *
     * @example 2738543
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example test
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'billCycle'          => 'BillCycle',
        'billId'             => 'BillId',
        'bizTime'            => 'BizTime',
        'bizType'            => 'BizType',
        'canInvoiceAmount'   => 'CanInvoiceAmount',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'invoicedAmount'     => 'InvoicedAmount',
        'itemId'             => 'ItemId',
        'name'               => 'Name',
        'offsetAcceptAmount' => 'OffsetAcceptAmount',
        'offsetCostAmount'   => 'OffsetCostAmount',
        'opId'               => 'OpId',
        'originalAmount'     => 'OriginalAmount',
        'outBizId'           => 'OutBizId',
        'presentAmount'      => 'PresentAmount',
        'status'             => 'Status',
        'type'               => 'Type',
        'userId'             => 'UserId',
        'userNick'           => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->canInvoiceAmount) {
            $res['CanInvoiceAmount'] = $this->canInvoiceAmount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->invoicedAmount) {
            $res['InvoicedAmount'] = $this->invoicedAmount;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->offsetAcceptAmount) {
            $res['OffsetAcceptAmount'] = $this->offsetAcceptAmount;
        }
        if (null !== $this->offsetCostAmount) {
            $res['OffsetCostAmount'] = $this->offsetCostAmount;
        }
        if (null !== $this->opId) {
            $res['OpId'] = $this->opId;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->presentAmount) {
            $res['PresentAmount'] = $this->presentAmount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CanInvoiceAmount'])) {
            $model->canInvoiceAmount = $map['CanInvoiceAmount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InvoicedAmount'])) {
            $model->invoicedAmount = $map['InvoicedAmount'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OffsetAcceptAmount'])) {
            $model->offsetAcceptAmount = $map['OffsetAcceptAmount'];
        }
        if (isset($map['OffsetCostAmount'])) {
            $model->offsetCostAmount = $map['OffsetCostAmount'];
        }
        if (isset($map['OpId'])) {
            $model->opId = $map['OpId'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['PresentAmount'])) {
            $model->presentAmount = $map['PresentAmount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
