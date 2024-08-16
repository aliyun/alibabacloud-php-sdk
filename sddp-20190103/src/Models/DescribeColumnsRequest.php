<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeColumnsRequest extends Model
{
    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @description The ID of the instance to which data in the column of the table belongs.
     *
     * > You can call the [DescribeInstances](~~DescribeRules~~) operation to query the IDs of instances.
     * @example 1
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the instance to which data in the column of the table belongs.
     *
     * @example rm-bp17t1htja573l5i8****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $modelTagId;

    /**
     * @description The search keyword. Fuzzy match is supported.
     *
     * For example, if you enter **test**, all columns whose names contain **test** are retrieved.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the service to which data in the column of the table belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productId;

    /**
     * @description The sensitivity level of the sensitive data that hits the sensitive data detection rule. Valid values:
     *
     *   **1**: N/A
     *   **2**: S1
     *   **3**: S2
     *   **4**: S3
     *   **5**: S4
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The ID of the sensitive data detection rule that data in the column of the table hits.
     *
     * > You can call the [DescribeRules](~~DescribeRules~~) operation to query the IDs of sensitive data detection rules.
     * @example 11111
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the sensitive data detection rule that data in the column of the table hits.
     *
     * @example ID card number (the Chinese mainland)
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The name of the sensitivity level of the data that hits the sensitive data detection rule. Valid values:
     *
     *   **N/A**: No sensitive data is detected.
     *   **S1**: indicates the low sensitivity level.
     *   **S2**: indicates the medium sensitivity level.
     *   **S3**: indicates the high sensitivity level.
     *   **S4**: indicates the highest sensitivity level.
     *
     * @example S2
     *
     * @var string
     */
    public $sensLevelName;

    /**
     * @description The ID of the table to which the column belongs.
     *
     * > You can call the [DescribeTables](~~DescribeTables~~) operation to query the IDs of tables.
     * @example 11132334
     *
     * @var int
     */
    public $tableId;

    /**
     * @description The name of the table.
     *
     * @example it_table
     *
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
        'currentPage'    => 'CurrentPage',
        'engineType'     => 'EngineType',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'lang'           => 'Lang',
        'modelTagId'     => 'ModelTagId',
        'name'           => 'Name',
        'pageSize'       => 'PageSize',
        'productCode'    => 'ProductCode',
        'productId'      => 'ProductId',
        'riskLevelId'    => 'RiskLevelId',
        'ruleId'         => 'RuleId',
        'ruleName'       => 'RuleName',
        'sensLevelName'  => 'SensLevelName',
        'tableId'        => 'TableId',
        'tableName'      => 'TableName',
        'templateId'     => 'TemplateId',
        'templateRuleId' => 'TemplateRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeColumnsRequest
     */
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
