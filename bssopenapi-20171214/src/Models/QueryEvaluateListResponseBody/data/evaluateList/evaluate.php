<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponseBody\data\evaluateList;

use AlibabaCloud\Tea\Model;

class evaluate extends Model
{
    /**
     * @var string
     */
    public $billCycle;

    /**
     * @var int
     */
    public $billId;

    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $canInvoiceAmount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $invoicedAmount;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $offsetAcceptAmount;

    /**
     * @var int
     */
    public $offsetCostAmount;

    /**
     * @var string
     */
    public $opId;

    /**
     * @var int
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var int
     */
    public $presentAmount;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userId;

    /**
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
