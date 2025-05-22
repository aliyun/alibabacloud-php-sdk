<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deliveryOrderBizId;

    /**
     * @var string
     */
    public $intentionAssignBizId;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'createTime' => 'CreateTime',
        'deliveryOrderBizId' => 'DeliveryOrderBizId',
        'intentionAssignBizId' => 'IntentionAssignBizId',
        'intentionBizId' => 'IntentionBizId',
        'partnerCode' => 'PartnerCode',
        'reason' => 'Reason',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deliveryOrderBizId) {
            $res['DeliveryOrderBizId'] = $this->deliveryOrderBizId;
        }

        if (null !== $this->intentionAssignBizId) {
            $res['IntentionAssignBizId'] = $this->intentionAssignBizId;
        }

        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }

        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeliveryOrderBizId'])) {
            $model->deliveryOrderBizId = $map['DeliveryOrderBizId'];
        }

        if (isset($map['IntentionAssignBizId'])) {
            $model->intentionAssignBizId = $map['IntentionAssignBizId'];
        }

        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }

        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
