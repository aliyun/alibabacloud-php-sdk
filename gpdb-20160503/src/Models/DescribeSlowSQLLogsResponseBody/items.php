<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowSQLLogsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $DBRole;

    /**
     * @var float
     */
    public $executeCost;

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
    public $operationExecuteTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $SQLPlan;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $scanRowCounts;

    /**
     * @var string
     */
    public $sourceIP;

    /**
     * @var int
     */
    public $sourcePort;
    protected $_name = [
        'accountName'          => 'AccountName',
        'DBName'               => 'DBName',
        'DBRole'               => 'DBRole',
        'executeCost'          => 'ExecuteCost',
        'executeState'         => 'ExecuteState',
        'operationClass'       => 'OperationClass',
        'operationExecuteTime' => 'OperationExecuteTime',
        'operationType'        => 'OperationType',
        'queryId'              => 'QueryId',
        'returnRowCounts'      => 'ReturnRowCounts',
        'SQLPlan'              => 'SQLPlan',
        'SQLText'              => 'SQLText',
        'scanRowCounts'        => 'ScanRowCounts',
        'sourceIP'             => 'SourceIP',
        'sourcePort'           => 'SourcePort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->DBRole) {
            $res['DBRole'] = $this->DBRole;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->operationExecuteTime) {
            $res['OperationExecuteTime'] = $this->operationExecuteTime;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->SQLPlan) {
            $res['SQLPlan'] = $this->SQLPlan;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->scanRowCounts) {
            $res['ScanRowCounts'] = $this->scanRowCounts;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DBRole'])) {
            $model->DBRole = $map['DBRole'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['OperationExecuteTime'])) {
            $model->operationExecuteTime = $map['OperationExecuteTime'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SQLPlan'])) {
            $model->SQLPlan = $map['SQLPlan'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ScanRowCounts'])) {
            $model->scanRowCounts = $map['ScanRowCounts'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        return $model;
    }
}
