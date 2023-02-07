<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;

use AlibabaCloud\Tea\Model;

class evaluate extends Model
{
    /**
     * @example 202002
     *
     * @var string
     */
    public $billCycle;

    /**
     * @example 234543254325
     *
     * @var int
     */
    public $billId;

    /**
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $bizTime;

    /**
     * @example ALIYUN
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 123213
     *
     * @var int
     */
    public $canInvoiceAmount;

    /**
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2018-10-10 18:05:44
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1325321532
     *
     * @var int
     */
    public $id;

    /**
     * @example 10000
     *
     * @var int
     */
    public $invoicedAmount;

    /**
     * @example 23453245
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 500
     *
     * @var int
     */
    public $offsetAcceptAmount;

    /**
     * @example 500
     *
     * @var int
     */
    public $offsetCostAmount;

    /**
     * @example 12341
     *
     * @var string
     */
    public $opId;

    /**
     * @example -10000
     *
     * @var int
     */
    public $originalAmount;

    /**
     * @example 124324213421
     *
     * @var string
     */
    public $outBizId;

    /**
     * @example -10000
     *
     * @var int
     */
    public $presentAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 2738543
     *
     * @var int
     */
    public $userId;

    /**
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
