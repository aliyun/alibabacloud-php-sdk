<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;

use AlibabaCloud\Tea\Model;

class evaluate extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $billId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $billCycle;

    /**
     * @var int
     */
    public $canInvoiceAmount;

    /**
     * @var int
     */
    public $offsetAcceptAmount;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $opId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $originalAmount;

    /**
     * @var int
     */
    public $invoicedAmount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $presentAmount;

    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $offsetCostAmount;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'type'               => 'Type',
        'status'             => 'Status',
        'billId'             => 'BillId',
        'userId'             => 'UserId',
        'billCycle'          => 'BillCycle',
        'canInvoiceAmount'   => 'CanInvoiceAmount',
        'offsetAcceptAmount' => 'OffsetAcceptAmount',
        'itemId'             => 'ItemId',
        'outBizId'           => 'OutBizId',
        'userNick'           => 'UserNick',
        'gmtModified'        => 'GmtModified',
        'opId'               => 'OpId',
        'bizType'            => 'BizType',
        'originalAmount'     => 'OriginalAmount',
        'invoicedAmount'     => 'InvoicedAmount',
        'gmtCreate'          => 'GmtCreate',
        'presentAmount'      => 'PresentAmount',
        'bizTime'            => 'BizTime',
        'name'               => 'Name',
        'offsetCostAmount'   => 'OffsetCostAmount',
        'id'                 => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->canInvoiceAmount) {
            $res['CanInvoiceAmount'] = $this->canInvoiceAmount;
        }
        if (null !== $this->offsetAcceptAmount) {
            $res['OffsetAcceptAmount'] = $this->offsetAcceptAmount;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->opId) {
            $res['OpId'] = $this->opId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->invoicedAmount) {
            $res['InvoicedAmount'] = $this->invoicedAmount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->presentAmount) {
            $res['PresentAmount'] = $this->presentAmount;
        }
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->offsetCostAmount) {
            $res['OffsetCostAmount'] = $this->offsetCostAmount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['CanInvoiceAmount'])) {
            $model->canInvoiceAmount = $map['CanInvoiceAmount'];
        }
        if (isset($map['OffsetAcceptAmount'])) {
            $model->offsetAcceptAmount = $map['OffsetAcceptAmount'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OpId'])) {
            $model->opId = $map['OpId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['InvoicedAmount'])) {
            $model->invoicedAmount = $map['InvoicedAmount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['PresentAmount'])) {
            $model->presentAmount = $map['PresentAmount'];
        }
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OffsetCostAmount'])) {
            $model->offsetCostAmount = $map['OffsetCostAmount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
