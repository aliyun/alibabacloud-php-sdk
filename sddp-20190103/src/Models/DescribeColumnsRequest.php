<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeColumnsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $productCode;

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
    public $tableName;

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
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $riskLevelId;
    protected $_name = [
        'lang'          => 'Lang',
        'name'          => 'Name',
        'tableId'       => 'TableId',
        'ruleId'        => 'RuleId',
        'productCode'   => 'ProductCode',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'tableName'     => 'TableName',
        'ruleName'      => 'RuleName',
        'sensLevelName' => 'SensLevelName',
        'pageSize'      => 'PageSize',
        'currentPage'   => 'CurrentPage',
        'riskLevelId'   => 'RiskLevelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        return $model;
    }
}
