<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeColumnsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $modelTagId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var int
     */
    public $riskLevelId;

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
    public $sensLevelName;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateRuleId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'engineType' => 'EngineType',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'lang' => 'Lang',
        'modelTagId' => 'ModelTagId',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'riskLevelId' => 'RiskLevelId',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'sensLevelName' => 'SensLevelName',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'templateId' => 'TemplateId',
        'templateRuleId' => 'TemplateRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->modelTagId) {
            $res['ModelTagId'] = $this->modelTagId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateRuleId) {
            $res['TemplateRuleId'] = $this->templateRuleId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ModelTagId'])) {
            $model->modelTagId = $map['ModelTagId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateRuleId'])) {
            $model->templateRuleId = $map['TemplateRuleId'];
        }

        return $model;
    }
}
