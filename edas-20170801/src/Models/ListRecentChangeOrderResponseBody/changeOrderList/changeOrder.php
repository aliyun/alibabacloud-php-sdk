<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList;

use AlibabaCloud\Tea\Model;

class changeOrder extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $changeOrderDescription;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var int
     */
    public $batchCount;

    /**
     * @var string
     */
    public $coTypeCode;

    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $coType;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'status'                 => 'Status',
        'finishTime'             => 'FinishTime',
        'createTime'             => 'CreateTime',
        'userId'                 => 'UserId',
        'changeOrderDescription' => 'ChangeOrderDescription',
        'source'                 => 'Source',
        'createUserId'           => 'CreateUserId',
        'batchCount'             => 'BatchCount',
        'coTypeCode'             => 'CoTypeCode',
        'changeOrderId'          => 'ChangeOrderId',
        'batchType'              => 'BatchType',
        'groupId'                => 'GroupId',
        'coType'                 => 'CoType',
        'appId'                  => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->changeOrderDescription) {
            $res['ChangeOrderDescription'] = $this->changeOrderDescription;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->batchCount) {
            $res['BatchCount'] = $this->batchCount;
        }
        if (null !== $this->coTypeCode) {
            $res['CoTypeCode'] = $this->coTypeCode;
        }
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ChangeOrderDescription'])) {
            $model->changeOrderDescription = $map['ChangeOrderDescription'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['BatchCount'])) {
            $model->batchCount = $map['BatchCount'];
        }
        if (isset($map['CoTypeCode'])) {
            $model->coTypeCode = $map['CoTypeCode'];
        }
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
