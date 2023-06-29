<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailResponseBody\items\modelTags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @example column comment
     *
     * @var string
     */
    public $columnComment;

    /**
     * @example hide14
     *
     * @var string
     */
    public $columnName;

    /**
     * @example varchar
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 1509415150052786176
     *
     * @var string
     */
    public $id;

    /**
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @example true
     *
     * @var bool
     */
    public $primaryKey;

    /**
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @example S1
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @example 1004
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example name
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'categories'    => 'Categories',
        'columnComment' => 'ColumnComment',
        'columnName'    => 'ColumnName',
        'dataType'      => 'DataType',
        'id'            => 'Id',
        'modelTags'     => 'ModelTags',
        'primaryKey'    => 'PrimaryKey',
        'riskLevelId'   => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelTags) {
            $res['ModelTags'] = [];
            if (null !== $this->modelTags && \is_array($this->modelTags)) {
                $n = 0;
                foreach ($this->modelTags as $item) {
                    $res['ModelTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n                = 0;
                foreach ($map['ModelTags'] as $item) {
                    $model->modelTags[$n++] = null !== $item ? modelTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
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

        return $model;
    }
}
