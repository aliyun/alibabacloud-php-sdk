<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example testadmin
     *
     * @var string
     */
    public $accountName;

    /**
     * @example adbpgadmin
     *
     * @var string
     */
    public $DBName;

    /**
     * @example master
     *
     * @var string
     */
    public $DBRole;

    /**
     * @example 2
     *
     * @var float
     */
    public $executeCost;

    /**
     * @example success
     *
     * @var string
     */
    public $executeState;

    /**
     * @example DQL
     *
     * @var string
     */
    public $operationClass;

    /**
     * @example 2021-03-15T17:02:32Z
     *
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @example ""
     *
     * @var string
     */
    public $SQLPlan;

    /**
     * @example select 1
     *
     * @var string
     */
    public $SQLText;

    /**
     * @example 1
     *
     * @var int
     */
    public $scanRowCounts;

    /**
     * @example 100.**.**.90
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @example 50514
     *
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
