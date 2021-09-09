<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogByQueryIdResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $operationClass;

    /**
     * @var string
     */
    public $executeState;

    /**
     * @var float
     */
    public $executeCost;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $DBRole;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $sourceIP;

    /**
     * @var string
     */
    public $SQLPlan;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @var int
     */
    public $scanRowCounts;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var string[]
     */
    public $sliceIds;
    protected $_name = [
        'operationClass'       => 'OperationClass',
        'executeState'         => 'ExecuteState',
        'executeCost'          => 'ExecuteCost',
        'SQLText'              => 'SQLText',
        'sourcePort'           => 'SourcePort',
        'DBRole'               => 'DBRole',
        'operationType'        => 'OperationType',
        'sourceIP'             => 'SourceIP',
        'SQLPlan'              => 'SQLPlan',
        'returnRowCounts'      => 'ReturnRowCounts',
        'DBName'               => 'DBName',
        'operationExecuteTime' => 'OperationExecuteTime',
        'scanRowCounts'        => 'ScanRowCounts',
        'accountName'          => 'AccountName',
        'queryId'              => 'QueryId',
        'sliceIds'             => 'SliceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationClass) {
            $res['OperationClass'] = $this->operationClass;
        }
        if (null !== $this->executeState) {
            $res['ExecuteState'] = $this->executeState;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->DBRole) {
            $res['DBRole'] = $this->DBRole;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
        }
        if (null !== $this->SQLPlan) {
            $res['SQLPlan'] = $this->SQLPlan;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->operationExecuteTime) {
            $res['OperationExecuteTime'] = $this->operationExecuteTime;
        }
        if (null !== $this->scanRowCounts) {
            $res['ScanRowCounts'] = $this->scanRowCounts;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->sliceIds) {
            $res['SliceIds'] = $this->sliceIds;
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
        if (isset($map['OperationClass'])) {
            $model->operationClass = $map['OperationClass'];
        }
        if (isset($map['ExecuteState'])) {
            $model->executeState = $map['ExecuteState'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['DBRole'])) {
            $model->DBRole = $map['DBRole'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
        }
        if (isset($map['SQLPlan'])) {
            $model->SQLPlan = $map['SQLPlan'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['OperationExecuteTime'])) {
            $model->operationExecuteTime = $map['OperationExecuteTime'];
        }
        if (isset($map['ScanRowCounts'])) {
            $model->scanRowCounts = $map['ScanRowCounts'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['SliceIds'])) {
            if (!empty($map['SliceIds'])) {
                $model->sliceIds = $map['SliceIds'];
            }
        }

        return $model;
    }
}
