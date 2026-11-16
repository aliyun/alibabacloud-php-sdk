<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ModifyProtectionRuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $defenseType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleStatus;
    protected $_name = [
        'defenseType' => 'DefenseType',
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'lockVersion' => 'LockVersion',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleId' => 'RuleId',
        'ruleStatus' => 'RuleStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
