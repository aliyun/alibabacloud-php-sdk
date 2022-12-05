<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProducesResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var string
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $orderTime;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $solutionBizId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'           => 'BizId',
        'bizType'         => 'BizType',
        'extInfo'         => 'ExtInfo',
        'intentionBizId'  => 'IntentionBizId',
        'modifyTime'      => 'ModifyTime',
        'orderId'         => 'OrderId',
        'orderInstanceId' => 'OrderInstanceId',
        'orderPrice'      => 'OrderPrice',
        'orderTime'       => 'OrderTime',
        'partnerCode'     => 'PartnerCode',
        'solutionBizId'   => 'SolutionBizId',
        'status'          => 'Status',
        'userId'          => 'UserId',
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
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->orderTime) {
            $res['OrderTime'] = $this->orderTime;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['OrderTime'])) {
            $model->orderTime = $map['OrderTime'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
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
