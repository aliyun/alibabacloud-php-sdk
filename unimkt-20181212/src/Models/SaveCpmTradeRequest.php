<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class SaveCpmTradeRequest extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $outerCode;

    /**
     * @var string
     */
    public $v;

    /**
     * @var int
     */
    public $tradeTime;

    /**
     * @var string
     */
    public $holdId;

    /**
     * @var int
     */
    public $age;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $applyPrice;

    /**
     * @var string
     */
    public $realCostAmount;

    /**
     * @var string
     */
    public $costDetail;

    /**
     * @var string
     */
    public $extendString;

    /**
     * @var string
     */
    public $advertType;

    /**
     * @var string
     */
    public $taskTag;
    protected $_name = [
        'deviceCode'     => 'DeviceCode',
        'channelId'      => 'ChannelId',
        'outerCode'      => 'OuterCode',
        'v'              => 'V',
        'tradeTime'      => 'TradeTime',
        'holdId'         => 'HoldId',
        'age'            => 'Age',
        'sex'            => 'Sex',
        'taskId'         => 'TaskId',
        'taskType'       => 'TaskType',
        'bizType'        => 'BizType',
        'chargeType'     => 'ChargeType',
        'applyPrice'     => 'ApplyPrice',
        'realCostAmount' => 'RealCostAmount',
        'costDetail'     => 'CostDetail',
        'extendString'   => 'ExtendString',
        'advertType'     => 'AdvertType',
        'taskTag'        => 'TaskTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->outerCode) {
            $res['OuterCode'] = $this->outerCode;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }
        if (null !== $this->tradeTime) {
            $res['TradeTime'] = $this->tradeTime;
        }
        if (null !== $this->holdId) {
            $res['HoldId'] = $this->holdId;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->applyPrice) {
            $res['ApplyPrice'] = $this->applyPrice;
        }
        if (null !== $this->realCostAmount) {
            $res['RealCostAmount'] = $this->realCostAmount;
        }
        if (null !== $this->costDetail) {
            $res['CostDetail'] = $this->costDetail;
        }
        if (null !== $this->extendString) {
            $res['ExtendString'] = $this->extendString;
        }
        if (null !== $this->advertType) {
            $res['AdvertType'] = $this->advertType;
        }
        if (null !== $this->taskTag) {
            $res['TaskTag'] = $this->taskTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveCpmTradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OuterCode'])) {
            $model->outerCode = $map['OuterCode'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }
        if (isset($map['TradeTime'])) {
            $model->tradeTime = $map['TradeTime'];
        }
        if (isset($map['HoldId'])) {
            $model->holdId = $map['HoldId'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ApplyPrice'])) {
            $model->applyPrice = $map['ApplyPrice'];
        }
        if (isset($map['RealCostAmount'])) {
            $model->realCostAmount = $map['RealCostAmount'];
        }
        if (isset($map['CostDetail'])) {
            $model->costDetail = $map['CostDetail'];
        }
        if (isset($map['ExtendString'])) {
            $model->extendString = $map['ExtendString'];
        }
        if (isset($map['AdvertType'])) {
            $model->advertType = $map['AdvertType'];
        }
        if (isset($map['TaskTag'])) {
            $model->taskTag = $map['TaskTag'];
        }

        return $model;
    }
}
