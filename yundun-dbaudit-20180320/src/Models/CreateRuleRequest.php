<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ruleInfo;

    /**
     * @var string
     */
    public $ruleDbRelation;

    /**
     * @var string
     */
    public $ruleGroup;

    /**
     * @var string
     */
    public $effectCurrentDBStatus;
    protected $_name = [
        'regionId'              => 'RegionId',
        'instanceId'            => 'InstanceId',
        'ruleInfo'              => 'RuleInfo',
        'ruleDbRelation'        => 'RuleDbRelation',
        'ruleGroup'             => 'RuleGroup',
        'effectCurrentDBStatus' => 'EffectCurrentDBStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleInfo) {
            $res['RuleInfo'] = $this->ruleInfo;
        }
        if (null !== $this->ruleDbRelation) {
            $res['RuleDbRelation'] = $this->ruleDbRelation;
        }
        if (null !== $this->ruleGroup) {
            $res['RuleGroup'] = $this->ruleGroup;
        }
        if (null !== $this->effectCurrentDBStatus) {
            $res['EffectCurrentDBStatus'] = $this->effectCurrentDBStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleInfo'])) {
            $model->ruleInfo = $map['RuleInfo'];
        }
        if (isset($map['RuleDbRelation'])) {
            $model->ruleDbRelation = $map['RuleDbRelation'];
        }
        if (isset($map['RuleGroup'])) {
            $model->ruleGroup = $map['RuleGroup'];
        }
        if (isset($map['EffectCurrentDBStatus'])) {
            $model->effectCurrentDBStatus = $map['EffectCurrentDBStatus'];
        }

        return $model;
    }
}
