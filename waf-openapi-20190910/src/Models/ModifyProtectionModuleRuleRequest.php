<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtectionModuleRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $defenseType;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $lockVersion;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'lang'        => 'Lang',
        'domain'      => 'Domain',
        'defenseType' => 'DefenseType',
        'rule'        => 'Rule',
        'ruleId'      => 'RuleId',
        'lockVersion' => 'LockVersion',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->defenseType) {
            $res['DefenseType'] = $this->defenseType;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->lockVersion) {
            $res['LockVersion'] = $this->lockVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProtectionModuleRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DefenseType'])) {
            $model->defenseType = $map['DefenseType'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['LockVersion'])) {
            $model->lockVersion = $map['LockVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
