<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListUserProducesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example P20220422095728000001
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
     * @example {\"designFileUrl\":\"https:\\/\\/oss.smalld.cn\\/zip\\/svg\\/20221115\\/105111f9-0ce4-4348-be1b-d88ea19de648.zip\"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example I20220927174444000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @example 1639037068811
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1154683179852260
     *
     * @var string
     */
    public $orderId;

    /**
     * @example swcopyright_normalReg_public_cn-i7m2mmo710v
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @example 809.10
     *
     * @var string
     */
    public $orderPrice;

    /**
     * @example 2021-12-13 18:03:03
     *
     * @var string
     */
    public $orderTime;

    /**
     * @example luokeke
     *
     * @var string
     */
    public $partnerCode;

    /**
     * @example S20220928163411000001
     *
     * @var string
     */
    public $solutionBizId;

    /**
     * @example initial
     *
     * @var int
     */
    public $status;

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
