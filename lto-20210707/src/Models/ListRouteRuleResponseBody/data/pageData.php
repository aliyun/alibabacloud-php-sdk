<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListRouteRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var int
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $bizChainName;

    /**
     * @var string
     */
    public $blockChainType;

    /**
     * @var string
     */
    public $chainUpMode;

    /**
     * @var string
     */
    public $contractName;

    /**
     * @var string
     */
    public $contractTemplateId;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $deviceGroupName;

    /**
     * @var string
     */
    public $invokeType;

    /**
     * @var string
     */
    public $privacyRuleId;

    /**
     * @var string
     */
    public $privacyRuleName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $routeRuleId;
    protected $_name = [
        'bizChainId' => 'BizChainId',
        'bizChainName' => 'BizChainName',
        'blockChainType' => 'BlockChainType',
        'chainUpMode' => 'ChainUpMode',
        'contractName' => 'ContractName',
        'contractTemplateId' => 'ContractTemplateId',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceGroupName' => 'DeviceGroupName',
        'invokeType' => 'InvokeType',
        'privacyRuleId' => 'PrivacyRuleId',
        'privacyRuleName' => 'PrivacyRuleName',
        'remark' => 'Remark',
        'routeRuleId' => 'RouteRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }

        if (null !== $this->bizChainName) {
            $res['BizChainName'] = $this->bizChainName;
        }

        if (null !== $this->blockChainType) {
            $res['BlockChainType'] = $this->blockChainType;
        }

        if (null !== $this->chainUpMode) {
            $res['ChainUpMode'] = $this->chainUpMode;
        }

        if (null !== $this->contractName) {
            $res['ContractName'] = $this->contractName;
        }

        if (null !== $this->contractTemplateId) {
            $res['ContractTemplateId'] = $this->contractTemplateId;
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }

        if (null !== $this->privacyRuleId) {
            $res['PrivacyRuleId'] = $this->privacyRuleId;
        }

        if (null !== $this->privacyRuleName) {
            $res['PrivacyRuleName'] = $this->privacyRuleName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->routeRuleId) {
            $res['RouteRuleId'] = $this->routeRuleId;
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
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }

        if (isset($map['BizChainName'])) {
            $model->bizChainName = $map['BizChainName'];
        }

        if (isset($map['BlockChainType'])) {
            $model->blockChainType = $map['BlockChainType'];
        }

        if (isset($map['ChainUpMode'])) {
            $model->chainUpMode = $map['ChainUpMode'];
        }

        if (isset($map['ContractName'])) {
            $model->contractName = $map['ContractName'];
        }

        if (isset($map['ContractTemplateId'])) {
            $model->contractTemplateId = $map['ContractTemplateId'];
        }

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        if (isset($map['PrivacyRuleId'])) {
            $model->privacyRuleId = $map['PrivacyRuleId'];
        }

        if (isset($map['PrivacyRuleName'])) {
            $model->privacyRuleName = $map['PrivacyRuleName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RouteRuleId'])) {
            $model->routeRuleId = $map['RouteRuleId'];
        }

        return $model;
    }
}
