<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserProduceResponseBody extends Model
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
    public $endTime;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

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
    public $partnerCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $solutionBizId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'           => 'BizId',
        'bizType'         => 'BizType',
        'endTime'         => 'EndTime',
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
        'extInfo'         => 'ExtInfo',
        'intentionBizId'  => 'IntentionBizId',
        'orderId'         => 'OrderId',
        'orderInstanceId' => 'OrderInstanceId',
        'orderPrice'      => 'OrderPrice',
        'partnerCode'     => 'PartnerCode',
        'requestId'       => 'RequestId',
        'solutionBizId'   => 'SolutionBizId',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'success'         => 'Success',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
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
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserProduceResponseBody
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
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
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
