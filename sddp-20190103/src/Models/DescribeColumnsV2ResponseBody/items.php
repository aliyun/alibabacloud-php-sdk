<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody\items\modelTags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 1536751124000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @example varchar
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 111111
     *
     * @var string
     */
    public $id;

    /**
     * @example 1232122
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example rm-1234
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @example obj_id
     *
     * @var string
     */
    public $name;

    /**
     * @example S4
     *
     * @var string
     */
    public $odpsRiskLevelName;

    /**
     * @example 3
     *
     * @var int
     */
    public $odpsRiskLevelValue;

    /**
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 12
     *
     * @var int
     */
    public $revisionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $revisionStatus;

    /**
     * @example 4
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

    /**
     * @example S2
     *
     * @var string
     */
    public $sensLevelName;

    /**
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @example 123
     *
     * @var int
     */
    public $tableId;

    /**
     * @example it_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'dataType'           => 'DataType',
        'id'                 => 'Id',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'modelTags'          => 'ModelTags',
        'name'               => 'Name',
        'odpsRiskLevelName'  => 'OdpsRiskLevelName',
        'odpsRiskLevelValue' => 'OdpsRiskLevelValue',
        'productCode'        => 'ProductCode',
        'revisionId'         => 'RevisionId',
        'revisionStatus'     => 'RevisionStatus',
        'riskLevelId'        => 'RiskLevelId',
        'riskLevelName'      => 'RiskLevelName',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'sensLevelName'      => 'SensLevelName',
        'sensitive'          => 'Sensitive',
        'tableId'            => 'TableId',
        'tableName'          => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
        }
        if (null !== $this->odpsRiskLevelValue) {
            $res['OdpsRiskLevelValue'] = $this->odpsRiskLevelValue;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->revisionId) {
            $res['RevisionId'] = $this->revisionId;
        }
        if (null !== $this->revisionStatus) {
            $res['RevisionStatus'] = $this->revisionStatus;
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
        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
        }
        if (isset($map['OdpsRiskLevelValue'])) {
            $model->odpsRiskLevelValue = $map['OdpsRiskLevelValue'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RevisionId'])) {
            $model->revisionId = $map['RevisionId'];
        }
        if (isset($map['RevisionStatus'])) {
            $model->revisionStatus = $map['RevisionStatus'];
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
        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
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
