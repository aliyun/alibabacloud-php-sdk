<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;

class SetDomainRuleGroupRequest extends Model
{
    /**
     * @var string
     */
    public $domains;

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
    public $resourceGroupId;

    /**
     * @var int
     */
    public $ruleGroupId;

    /**
     * @var int
     */
    public $wafAiStatus;

    /**
     * @var int
     */
    public $wafVersion;
    protected $_name = [
        'domains' => 'Domains',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleGroupId' => 'RuleGroupId',
        'wafAiStatus' => 'WafAiStatus',
        'wafVersion' => 'WafVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }

        if (null !== $this->wafAiStatus) {
            $res['WafAiStatus'] = $this->wafAiStatus;
        }

        if (null !== $this->wafVersion) {
            $res['WafVersion'] = $this->wafVersion;
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
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }

        if (isset($map['WafAiStatus'])) {
            $model->wafAiStatus = $map['WafAiStatus'];
        }

        if (isset($map['WafVersion'])) {
            $model->wafVersion = $map['WafVersion'];
        }

        return $model;
    }
}
