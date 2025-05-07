<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRulesResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $actionExternal;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $defenseOrigin;

    /**
     * @var string
     */
    public $defenseScene;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detailRuleIds;

    /**
     * @var string
     */
    public $externalInfo;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'actionExternal' => 'ActionExternal',
        'config' => 'Config',
        'defenseOrigin' => 'DefenseOrigin',
        'defenseScene' => 'DefenseScene',
        'description' => 'Description',
        'detailRuleIds' => 'DetailRuleIds',
        'externalInfo' => 'ExternalInfo',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'status' => 'Status',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionExternal) {
            $res['ActionExternal'] = $this->actionExternal;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->defenseOrigin) {
            $res['DefenseOrigin'] = $this->defenseOrigin;
        }

        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detailRuleIds) {
            $res['DetailRuleIds'] = $this->detailRuleIds;
        }

        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = $this->externalInfo;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ActionExternal'])) {
            $model->actionExternal = $map['ActionExternal'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DefenseOrigin'])) {
            $model->defenseOrigin = $map['DefenseOrigin'];
        }

        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DetailRuleIds'])) {
            $model->detailRuleIds = $map['DetailRuleIds'];
        }

        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = $map['ExternalInfo'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
