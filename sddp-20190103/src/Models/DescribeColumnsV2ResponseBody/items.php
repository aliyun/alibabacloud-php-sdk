<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2ResponseBody\items\modelTags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the data in the column of the table is created. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The type of data in the column of the table.
     *
     * @example varchar
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The ID of the column of the table.
     *
     * @example 111111
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the instance to which data in the column of the table belongs.
     *
     * @example 1232122
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the instance to which data in the column of the table belongs.
     *
     * @example rm-1234
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description A list of data tags.
     *
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @description The name of the column of the table.
     *
     * @example obj_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the sensitivity level for asset. Valid values:
     *
     *   **N/A**: indicates that no sensitive data is detected.
     *   **S1**: indicates the low sensitivity level.
     *   **S2**: indicates the medium sensitivity level.
     *   **S3**: indicates the high sensitivity level.
     *   **S4**: indicates the highest sensitivity level.
     *
     * @example S4
     *
     * @var string
     */
    public $odpsRiskLevelName;

    /**
     * @description The ID of the sensitivity level of the asset. Valid values:
     *
     *   **1**: N/A
     *   **2**: S1
     *   **3**: S2
     *   **4**: S3
     *   **5**: S4
     * >The return value <=1 means N/A.
     * @example 3
     *
     * @var int
     */
    public $odpsRiskLevelValue;

    /**
     * @description The name of the service to which data in the column of the table belongs. Valid values: **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the revision record.
     *
     * @example 12
     *
     * @var int
     */
    public $revisionId;

    /**
     * @description Indicates whether the column is revised. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var int
     */
    public $revisionStatus;

    /**
     * @description The ID of the sensitivity level of data in the column of the table. Valid values:
     *
     *   **1**: N/A
     *   **2**: S1
     *   **3**: S2
     *   **4**: S3
     *   **5**: S4
     *
     * >The return value <=1 means N/A.
     * @example 4
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for data in the column of the table. Valid values:
     *
     *   **N/A**: indicates that no sensitive data is detected.
     *   **S1**: indicates the low sensitivity level.
     *   **S2**: indicates the medium sensitivity level.
     *   **S3**: indicates the high sensitivity level.
     *   **S4**: indicates the highest sensitivity level.
     *
     * @example S1
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The ID of the sensitive data detection rule that data in the column of the table hits.
     *
     * @example 1004
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
     * @description Indicates whether the column contains sensitive data. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description The ID of the table.
     *
     * @example 123
     *
     * @var int
     */
    public $tableId;

    /**
     * @description The name of the table to which the revised column belongs.
     *
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
