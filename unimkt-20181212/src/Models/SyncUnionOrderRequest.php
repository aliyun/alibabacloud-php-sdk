<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class SyncUnionOrderRequest extends Model
{
    /**
     * @var string
     */
    public $bizSerialNumber;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $holderId;

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
    public $brandName;

    /**
     * @var int
     */
    public $brandUserId;

    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $industryLabelBagId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskBizType;

    /**
     * @var string
     */
    public $taskRuleType;

    /**
     * @var int
     */
    public $applyPrice;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $realCostAmount;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $proxyChannelId;

    /**
     * @var string
     */
    public $v;

    /**
     * @var string
     */
    public $tradeTimeString;
    protected $_name = [
        'bizSerialNumber'    => 'BizSerialNumber',
        'deviceId'           => 'DeviceId',
        'channelId'          => 'ChannelId',
        'holderId'           => 'HolderId',
        'age'                => 'Age',
        'sex'                => 'Sex',
        'brandName'          => 'BrandName',
        'brandUserId'        => 'BrandUserId',
        'proxyUserId'        => 'ProxyUserId',
        'taskId'             => 'TaskId',
        'industryLabelBagId' => 'IndustryLabelBagId',
        'taskType'           => 'TaskType',
        'taskBizType'        => 'TaskBizType',
        'taskRuleType'       => 'TaskRuleType',
        'applyPrice'         => 'ApplyPrice',
        'status'             => 'Status',
        'realCostAmount'     => 'RealCostAmount',
        'extendInfo'         => 'ExtendInfo',
        'proxyChannelId'     => 'ProxyChannelId',
        'v'                  => 'V',
        'tradeTimeString'    => 'TradeTimeString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizSerialNumber) {
            $res['BizSerialNumber'] = $this->bizSerialNumber;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->holderId) {
            $res['HolderId'] = $this->holderId;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->brandUserId) {
            $res['BrandUserId'] = $this->brandUserId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->industryLabelBagId) {
            $res['IndustryLabelBagId'] = $this->industryLabelBagId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskBizType) {
            $res['TaskBizType'] = $this->taskBizType;
        }
        if (null !== $this->taskRuleType) {
            $res['TaskRuleType'] = $this->taskRuleType;
        }
        if (null !== $this->applyPrice) {
            $res['ApplyPrice'] = $this->applyPrice;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->realCostAmount) {
            $res['RealCostAmount'] = $this->realCostAmount;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->proxyChannelId) {
            $res['ProxyChannelId'] = $this->proxyChannelId;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }
        if (null !== $this->tradeTimeString) {
            $res['TradeTimeString'] = $this->tradeTimeString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncUnionOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizSerialNumber'])) {
            $model->bizSerialNumber = $map['BizSerialNumber'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['HolderId'])) {
            $model->holderId = $map['HolderId'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['BrandUserId'])) {
            $model->brandUserId = $map['BrandUserId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['IndustryLabelBagId'])) {
            $model->industryLabelBagId = $map['IndustryLabelBagId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskBizType'])) {
            $model->taskBizType = $map['TaskBizType'];
        }
        if (isset($map['TaskRuleType'])) {
            $model->taskRuleType = $map['TaskRuleType'];
        }
        if (isset($map['ApplyPrice'])) {
            $model->applyPrice = $map['ApplyPrice'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RealCostAmount'])) {
            $model->realCostAmount = $map['RealCostAmount'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['ProxyChannelId'])) {
            $model->proxyChannelId = $map['ProxyChannelId'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }
        if (isset($map['TradeTimeString'])) {
            $model->tradeTimeString = $map['TradeTimeString'];
        }

        return $model;
    }
}
