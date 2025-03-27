<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyHybridCloudClusterRuleRequest extends Model
{
    /**
     * @var int
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }

        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }

        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
