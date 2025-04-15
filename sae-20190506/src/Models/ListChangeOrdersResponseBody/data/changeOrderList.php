<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListChangeOrdersResponseBody\data;

use AlibabaCloud\Dara\Model;

class changeOrderList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $batchCount;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $coType;

    /**
     * @var string
     */
    public $coTypeCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'batchCount' => 'BatchCount',
        'batchType' => 'BatchType',
        'changeOrderId' => 'ChangeOrderId',
        'coType' => 'CoType',
        'coTypeCode' => 'CoTypeCode',
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'description' => 'Description',
        'finishTime' => 'FinishTime',
        'groupId' => 'GroupId',
        'source' => 'Source',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->batchCount) {
            $res['BatchCount'] = $this->batchCount;
        }

        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }

        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }

        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }

        if (null !== $this->coTypeCode) {
            $res['CoTypeCode'] = $this->coTypeCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BatchCount'])) {
            $model->batchCount = $map['BatchCount'];
        }

        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }

        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }

        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }

        if (isset($map['CoTypeCode'])) {
            $model->coTypeCode = $map['CoTypeCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
