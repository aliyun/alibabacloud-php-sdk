<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody\items\modelTags;

class items extends Model
{
    /**
     * @var int
     */
    public $creationTime;
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
     * @var int
     */
    public $instanceId;
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
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $odpsRiskLevelName;
    /**
     * @var int
     */
    public $odpsRiskLevelValue;
    /**
     * @var string
     */
    public $productCode;
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
    public $revisionId;
    /**
     * @var int
     */
    public $revisionStatus;
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
    public $sensLevelName;
    /**
     * @var bool
     */
    public $sensitive;
    /**
     * @var int
     */
    public $tableId;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'dataType'           => 'DataType',
        'engineType'         => 'EngineType',
        'id'                 => 'Id',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'maskingStatus'      => 'MaskingStatus',
        'modelTags'          => 'ModelTags',
        'name'               => 'Name',
        'odpsRiskLevelName'  => 'OdpsRiskLevelName',
        'odpsRiskLevelValue' => 'OdpsRiskLevelValue',
        'productCode'        => 'ProductCode',
        'productId'          => 'ProductId',
        'regionId'           => 'RegionId',
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
        if (\is_array($this->modelTags)) {
            Model::validateArray($this->modelTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
                $n1               = 0;
                foreach ($this->modelTags as $item1) {
                    $res['ModelTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
                $n1               = 0;
                foreach ($map['ModelTags'] as $item1) {
                    $model->modelTags[$n1++] = modelTags::fromMap($item1);
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

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
