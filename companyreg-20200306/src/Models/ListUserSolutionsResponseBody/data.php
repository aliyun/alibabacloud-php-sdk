<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserSolutionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example S20210924151843000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.logo
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 164454443222
     *
     * @var int
     */
    public $createTime;

    /**
     * @example P20210924151843000001
     *
     * @var string
     */
    public $deliveryOrderBizId;

    /**
     * @example A20210924151843000001
     *
     * @var string
     */
    public $intentionAssignBizId;

    /**
     * @example I20210924151843000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @example jinsan
     *
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 164454443222
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example 1219541161213057
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'                => 'BizId',
        'bizType'              => 'BizType',
        'createTime'           => 'CreateTime',
        'deliveryOrderBizId'   => 'DeliveryOrderBizId',
        'intentionAssignBizId' => 'IntentionAssignBizId',
        'intentionBizId'       => 'IntentionBizId',
        'partnerCode'          => 'PartnerCode',
        'reason'               => 'Reason',
        'status'               => 'Status',
        'updateTime'           => 'UpdateTime',
        'userId'               => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
