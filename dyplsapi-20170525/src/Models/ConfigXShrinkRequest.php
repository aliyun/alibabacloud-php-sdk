<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class ConfigXShrinkRequest extends Model
{
    /**
     * @description 开/关呼叫能力状态‘0’：禁用‘1’：开启
     *
     * @example 0
     *
     * @var string
     */
    public $callAbility;

    /**
     * @description 客户uid
     *
     * @example 1898871967585852
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description 号码池key
     *
     * This parameter is required.
     * @example FC5**********************a1a
     *
     * @var string
     */
    public $customerPoolKey;

    /**
     * @description 是否透传来显为真实主叫：00-非透传：互相拨打时都显示工作号;10-透传：A客户为主叫时,B员工的来显为客户A号码;B员工为主叫时,A客户的来显为工作号;默认为 00
     *
     * @example 0
     *
     * @var string
     */
    public $GNFlag;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 请求去重ID, reqId最大长度为20位,接入方需要保持原子性
     *
     * This parameter is required.
     * @example 564**********879
     *
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 顺振控制参数
     *
     * @var string
     */
    public $sequenceCallsShrink;

    /**
     * @description 顺振模式：0-不顺振（默认）1-有条件顺振，先接续calledNo指定被叫，如果该被叫未能接通，再顺振sequenceCalls号码列表2-无条件顺振，不接续calledNo指定被叫，直接顺振sequenceCalls号码列表
     *
     * @example 0
     *
     * @var string
     */
    public $sequenceMode;

    /**
     * @description 开/关短信功能状态‘0’：禁用；‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $smsAbility;

    /**
     * @description 是否透传来显为真实用户0：不透传; 1：透传默认：0不透传
     *
     * @example 0
     *
     * @var string
     */
    public $smsSignMode;

    /**
     * @description X号码
     *
     * This parameter is required.
     * @example 17*******22
     *
     * @var string
     */
    public $telX;
    protected $_name = [
        'callAbility'          => 'CallAbility',
        'callerParentId'       => 'CallerParentId',
        'customerPoolKey'      => 'CustomerPoolKey',
        'GNFlag'               => 'GNFlag',
        'ownerId'              => 'OwnerId',
        'reqId'                => 'ReqId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sequenceCallsShrink'  => 'SequenceCalls',
        'sequenceMode'         => 'SequenceMode',
        'smsAbility'           => 'SmsAbility',
        'smsSignMode'          => 'SmsSignMode',
        'telX'                 => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }
        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sequenceCallsShrink) {
            $res['SequenceCalls'] = $this->sequenceCallsShrink;
        }
        if (null !== $this->sequenceMode) {
            $res['SequenceMode'] = $this->sequenceMode;
        }
        if (null !== $this->smsAbility) {
            $res['SmsAbility'] = $this->smsAbility;
        }
        if (null !== $this->smsSignMode) {
            $res['SmsSignMode'] = $this->smsSignMode;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigXShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallAbility'])) {
            $model->callAbility = $map['CallAbility'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }
        if (isset($map['GNFlag'])) {
            $model->GNFlag = $map['GNFlag'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SequenceCalls'])) {
            $model->sequenceCallsShrink = $map['SequenceCalls'];
        }
        if (isset($map['SequenceMode'])) {
            $model->sequenceMode = $map['SequenceMode'];
        }
        if (isset($map['SmsAbility'])) {
            $model->smsAbility = $map['SmsAbility'];
        }
        if (isset($map['SmsSignMode'])) {
            $model->smsSignMode = $map['SmsSignMode'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
