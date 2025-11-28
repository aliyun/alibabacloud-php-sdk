<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class UpdateRouteRuleRequest extends Model
{
    /**
     * @var string
     */
    public $bizChainId;

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
    public $invokeType;

    /**
     * @var string
     */
    public $privacyRuleId;

    /**
     * @var string
     */
    public $regionId;

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
        'contractName' => 'ContractName',
        'contractTemplateId' => 'ContractTemplateId',
        'invokeType' => 'InvokeType',
        'privacyRuleId' => 'PrivacyRuleId',
        'regionId' => 'RegionId',
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

        if (null !== $this->contractName) {
            $res['ContractName'] = $this->contractName;
        }

        if (null !== $this->contractTemplateId) {
            $res['ContractTemplateId'] = $this->contractTemplateId;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }

        if (null !== $this->privacyRuleId) {
            $res['PrivacyRuleId'] = $this->privacyRuleId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['ContractName'])) {
            $model->contractName = $map['ContractName'];
        }

        if (isset($map['ContractTemplateId'])) {
            $model->contractTemplateId = $map['ContractTemplateId'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        if (isset($map['PrivacyRuleId'])) {
            $model->privacyRuleId = $map['PrivacyRuleId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
