<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserProduceResponseBody extends Model
{
    /**
     * @example P20220713180339000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @description BizType
     *
     * @example esp.logo
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 2022-08-24 10:53:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example sae.errorcode.ServiceDisabled.message
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 111111111111111
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example {\"designFileUrl\":\"https:\\/\\/oss.smalld.cn\\/zip\\/svg\\/20220519\\/3e63365c-f7d9-4fa6-9d38-413262fbf4c7.zip\"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example I20221129122203000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @example 216992253670473
     *
     * @var string
     */
    public $orderId;

    /**
     * @example swcopyright_swRegNormal_public_cn-tl32wr9giwy
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @example 1899.00
     *
     * @var string
     */
    public $orderPrice;

    /**
     * @example luokeke
     *
     * @var string
     */
    public $partnerCode;

    /**
     * @example 1B0A9A68-5A1A-5179-8591-0463F4686EEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example S20220624105026000001
     *
     * @var string
     */
    public $solutionBizId;

    /**
     * @example 2022-10-16T06:35:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 40
     *
     * @var int
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description UserId
     *
     * @example UserId
     *
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
