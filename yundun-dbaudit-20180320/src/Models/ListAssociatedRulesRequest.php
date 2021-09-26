<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ListAssociatedRulesRequest extends Model
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
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $ruleDefn;

    /**
     * @var int
     */
    public $dbId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'ruleName'   => 'RuleName',
        'ruleType'   => 'RuleType',
        'ruleDefn'   => 'RuleDefn',
        'dbId'       => 'DbId',
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->ruleDefn) {
            $res['RuleDefn'] = $this->ruleDefn;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssociatedRulesRequest
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['RuleDefn'])) {
            $model->ruleDefn = $map['RuleDefn'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        return $model;
    }
}
