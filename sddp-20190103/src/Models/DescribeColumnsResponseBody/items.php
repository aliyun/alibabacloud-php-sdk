<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var int
     */
    public $odpsRiskLevelValue;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $sensLevelName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var string
     */
    public $odpsRiskLevelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $revisionStatus;

    /**
     * @var int
     */
    public $revisionId;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'tableName'          => 'TableName',
        'dataType'           => 'DataType',
        'odpsRiskLevelValue' => 'OdpsRiskLevelValue',
        'instanceId'         => 'InstanceId',
        'riskLevelId'        => 'RiskLevelId',
        'ruleName'           => 'RuleName',
        'ruleId'             => 'RuleId',
        'sensitive'          => 'Sensitive',
        'sensLevelName'      => 'SensLevelName',
        'instanceName'       => 'InstanceName',
        'riskLevelName'      => 'RiskLevelName',
        'odpsRiskLevelName'  => 'OdpsRiskLevelName',
        'name'               => 'Name',
        'tableId'            => 'TableId',
        'id'                 => 'Id',
        'productCode'        => 'ProductCode',
        'revisionStatus'     => 'RevisionStatus',
        'revisionId'         => 'RevisionId',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->odpsRiskLevelValue) {
            $res['OdpsRiskLevelValue'] = $this->odpsRiskLevelValue;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->revisionStatus) {
            $res['RevisionStatus'] = $this->revisionStatus;
        }
        if (null !== $this->revisionId) {
            $res['RevisionId'] = $this->revisionId;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['OdpsRiskLevelValue'])) {
            $model->odpsRiskLevelValue = $map['OdpsRiskLevelValue'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RevisionStatus'])) {
            $model->revisionStatus = $map['RevisionStatus'];
        }
        if (isset($map['RevisionId'])) {
            $model->revisionId = $map['RevisionId'];
        }

        return $model;
    }
}
