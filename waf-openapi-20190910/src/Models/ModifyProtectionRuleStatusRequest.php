<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtectionRuleStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tamperproof
     *
     * @var string
     */
    public $defenseType;

    /**
     * @description This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @example waf_elasticity-cn-0xldbqt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $lockVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 42755
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $ruleStatus;
    protected $_name = [
        'defenseType'     => 'DefenseType',
        'domain'          => 'Domain',
        'instanceId'      => 'InstanceId',
        'lockVersion'     => 'LockVersion',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleId'          => 'RuleId',
        'ruleStatus'      => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseType) {
            $res['DefenseType'] = $this->defenseType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lockVersion) {
            $res['LockVersion'] = $this->lockVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProtectionRuleStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseType'])) {
            $model->defenseType = $map['DefenseType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LockVersion'])) {
            $model->lockVersion = $map['LockVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
