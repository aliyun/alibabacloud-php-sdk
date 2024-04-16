<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\defaultDesensitizationRule;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\semiDesensitizationRuleList;
use AlibabaCloud\Tea\Model;

class sensitiveColumn extends Model
{
    /**
     * @var string
     */
    public $categoryName;

    /**
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @var defaultDesensitizationRule
     */
    public $defaultDesensitizationRule;

    /**
     * @example 183****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example False
     *
     * @var bool
     */
    public $isPlain;

    /**
     * @var string
     */
    public $sampleData;

    /**
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var semiDesensitizationRuleList
     */
    public $semiDesensitizationRuleList;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example S1
     *
     * @var string
     */
    public $userSensitivityLevel;
    protected $_name = [
        'categoryName'                => 'CategoryName',
        'columnName'                  => 'ColumnName',
        'defaultDesensitizationRule'  => 'DefaultDesensitizationRule',
        'instanceId'                  => 'InstanceId',
        'isPlain'                     => 'IsPlain',
        'sampleData'                  => 'SampleData',
        'schemaName'                  => 'SchemaName',
        'securityLevel'               => 'SecurityLevel',
        'semiDesensitizationRuleList' => 'SemiDesensitizationRuleList',
        'tableName'                   => 'TableName',
        'userSensitivityLevel'        => 'UserSensitivityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->defaultDesensitizationRule) {
            $res['DefaultDesensitizationRule'] = null !== $this->defaultDesensitizationRule ? $this->defaultDesensitizationRule->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isPlain) {
            $res['IsPlain'] = $this->isPlain;
        }
        if (null !== $this->sampleData) {
            $res['SampleData'] = $this->sampleData;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->semiDesensitizationRuleList) {
            $res['SemiDesensitizationRuleList'] = null !== $this->semiDesensitizationRuleList ? $this->semiDesensitizationRuleList->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->userSensitivityLevel) {
            $res['UserSensitivityLevel'] = $this->userSensitivityLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveColumn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DefaultDesensitizationRule'])) {
            $model->defaultDesensitizationRule = defaultDesensitizationRule::fromMap($map['DefaultDesensitizationRule']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsPlain'])) {
            $model->isPlain = $map['IsPlain'];
        }
        if (isset($map['SampleData'])) {
            $model->sampleData = $map['SampleData'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['SemiDesensitizationRuleList'])) {
            $model->semiDesensitizationRuleList = semiDesensitizationRuleList::fromMap($map['SemiDesensitizationRuleList']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UserSensitivityLevel'])) {
            $model->userSensitivityLevel = $map['UserSensitivityLevel'];
        }

        return $model;
    }
}
