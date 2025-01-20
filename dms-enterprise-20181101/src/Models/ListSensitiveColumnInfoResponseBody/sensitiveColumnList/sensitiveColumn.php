<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\defaultDesensitizationRule;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\semiDesensitizationRuleList;

class sensitiveColumn extends Model
{
    /**
     * @var string
     */
    public $categoryName;
    /**
     * @var string
     */
    public $columnName;
    /**
     * @var defaultDesensitizationRule
     */
    public $defaultDesensitizationRule;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $isPlain;
    /**
     * @var string
     */
    public $sampleData;
    /**
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
     * @var string
     */
    public $tableName;
    /**
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
        if (null !== $this->defaultDesensitizationRule) {
            $this->defaultDesensitizationRule->validate();
        }
        if (null !== $this->semiDesensitizationRuleList) {
            $this->semiDesensitizationRuleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->defaultDesensitizationRule) {
            $res['DefaultDesensitizationRule'] = null !== $this->defaultDesensitizationRule ? $this->defaultDesensitizationRule->toArray($noStream) : $this->defaultDesensitizationRule;
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
            $res['SemiDesensitizationRuleList'] = null !== $this->semiDesensitizationRuleList ? $this->semiDesensitizationRuleList->toArray($noStream) : $this->semiDesensitizationRuleList;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->userSensitivityLevel) {
            $res['UserSensitivityLevel'] = $this->userSensitivityLevel;
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
