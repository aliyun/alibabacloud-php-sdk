<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponse;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var float
     */
    public $executeCost;

    /**
     * @var string
     */
    public $DBRole;

    /**
     * @var string
     */
    public $sourceIP;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $executeState;

    /**
     * @var string
     */
    public $operationClass;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $scanRowCounts;

    /**
     * @var string
     */
    public $SQLPlan;
    protected $_name = [
        'DBName'               => 'DBName',
        'accountName'          => 'AccountName',
        'operationExecuteTime' => 'OperationExecuteTime',
        'SQLText'              => 'SQLText',
        'returnRowCounts'      => 'ReturnRowCounts',
        'executeCost'          => 'ExecuteCost',
        'DBRole'               => 'DBRole',
        'sourceIP'             => 'SourceIP',
        'sourcePort'           => 'SourcePort',
        'executeState'         => 'ExecuteState',
        'operationClass'       => 'OperationClass',
        'operationType'        => 'OperationType',
        'scanRowCounts'        => 'ScanRowCounts',
        'SQLPlan'              => 'SQLPlan',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('operationExecuteTime', $this->operationExecuteTime, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('returnRowCounts', $this->returnRowCounts, true);
        Model::validateRequired('executeCost', $this->executeCost, true);
        Model::validateRequired('DBRole', $this->DBRole, true);
        Model::validateRequired('sourceIP', $this->sourceIP, true);
        Model::validateRequired('sourcePort', $this->sourcePort, true);
        Model::validateRequired('executeState', $this->executeState, true);
        Model::validateRequired('operationClass', $this->operationClass, true);
        Model::validateRequired('operationType', $this->operationType, true);
        Model::validateRequired('scanRowCounts', $this->scanRowCounts, true);
        Model::validateRequired('SQLPlan', $this->SQLPlan, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->operationExecuteTime) {
            $res['OperationExecuteTime'] = $this->operationExecuteTime;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->DBRole) {
            $res['DBRole'] = $this->DBRole;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->scanRowCounts) {
            $res['ScanRowCounts'] = $this->scanRowCounts;
        }
        if (null !== $this->SQLPlan) {
            $res['SQLPlan'] = $this->SQLPlan;
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['OperationExecuteTime'])) {
            $model->operationExecuteTime = $map['OperationExecuteTime'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['DBRole'])) {
            $model->DBRole = $map['DBRole'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['ScanRowCounts'])) {
            $model->scanRowCounts = $map['ScanRowCounts'];
        }
        if (isset($map['SQLPlan'])) {
            $model->SQLPlan = $map['SQLPlan'];
        }

        return $model;
    }
}
