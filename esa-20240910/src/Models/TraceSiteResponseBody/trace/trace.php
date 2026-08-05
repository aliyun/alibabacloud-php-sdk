<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteResponseBody\trace;

use AlibabaCloud\Dara\Model;

class trace extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $ddosLevelDomestic;

    /**
     * @var string
     */
    public $ddosLevelOversea;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $originPoolName;

    /**
     * @var string
     */
    public $routineId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'action' => 'Action',
        'configType' => 'ConfigType',
        'ddosLevelDomestic' => 'DdosLevelDomestic',
        'ddosLevelOversea' => 'DdosLevelOversea',
        'envName' => 'EnvName',
        'expression' => 'Expression',
        'level' => 'Level',
        'loadBalancerName' => 'LoadBalancerName',
        'originPoolName' => 'OriginPoolName',
        'routineId' => 'RoutineId',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'siteVersion' => 'SiteVersion',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->ddosLevelDomestic) {
            $res['DdosLevelDomestic'] = $this->ddosLevelDomestic;
        }

        if (null !== $this->ddosLevelOversea) {
            $res['DdosLevelOversea'] = $this->ddosLevelOversea;
        }

        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->originPoolName) {
            $res['OriginPoolName'] = $this->originPoolName;
        }

        if (null !== $this->routineId) {
            $res['RoutineId'] = $this->routineId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['DdosLevelDomestic'])) {
            $model->ddosLevelDomestic = $map['DdosLevelDomestic'];
        }

        if (isset($map['DdosLevelOversea'])) {
            $model->ddosLevelOversea = $map['DdosLevelOversea'];
        }

        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        if (isset($map['OriginPoolName'])) {
            $model->originPoolName = $map['OriginPoolName'];
        }

        if (isset($map['RoutineId'])) {
            $model->routineId = $map['RoutineId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
