<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailResponseBody\items\modelTags;

class items extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $columnComment;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maskingStatus;

    /**
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @var bool
     */
    public $primaryKey;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $riskLevelName;

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
    public $tableName;
    protected $_name = [
        'categories' => 'Categories',
        'columnComment' => 'ColumnComment',
        'columnName' => 'ColumnName',
        'dataType' => 'DataType',
        'engineType' => 'EngineType',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'maskingStatus' => 'MaskingStatus',
        'modelTags' => 'ModelTags',
        'primaryKey' => 'PrimaryKey',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'riskLevelId' => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->modelTags)) {
            Model::validateArray($this->modelTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->maskingStatus) {
            $res['MaskingStatus'] = $this->maskingStatus;
        }

        if (null !== $this->modelTags) {
            if (\is_array($this->modelTags)) {
                $res['ModelTags'] = [];
                $n1 = 0;
                foreach ($this->modelTags as $item1) {
                    $res['ModelTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MaskingStatus'])) {
            $model->maskingStatus = $map['MaskingStatus'];
        }

        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n1 = 0;
                foreach ($map['ModelTags'] as $item1) {
                    $model->modelTags[$n1] = modelTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
