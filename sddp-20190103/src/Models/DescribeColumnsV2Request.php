<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeColumnsV2Request extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the instance to which data in the column of the table belongs.
     *
     * >  You can call the [DescribeInstances](https://help.aliyun.com/document_detail/141708.html) operation to obtain the ID of the instance to which the data in the column of the table belongs.
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
     *   **zh_cn**: simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

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
     * @description The number of entries per page. Default value: **10**.
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
     * @description The ID of the sensitivity level of the data that hits the sensitive data detection rule. Valid values:
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
     * >  You can call the [DescribeRules](https://help.aliyun.com/document_detail/141389.html) operation to obtain the ID of the sensitive data detection rule.
     * @example 11122200
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the sensitive data detection rule that data in the column of the table hits.
     *
     * @example name
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The name of the sensitivity level. Valid values:
     *
     *   **N/A**: indicates that no sensitive data is detected.
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
     * >  You can call the [DescribeTables](https://help.aliyun.com/document_detail/141709.html) operation to obtain the ID of the table.
     * @example 11132334
     *
     * @var string
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
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'lang'          => 'Lang',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'productCode'   => 'ProductCode',
        'riskLevelId'   => 'RiskLevelId',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
        'sensLevelName' => 'SensLevelName',
        'tableId'       => 'TableId',
        'tableName'     => 'TableName',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeColumnsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
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

        return $model;
    }
}
