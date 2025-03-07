<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsV2ResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The database account that executes the SQL statement.
     *
     * @example testadmin
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the database.
     *
     * @example adbpgadmin
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The role of the database.
     *
     * @example master
     *
     * @var string
     */
    public $DBRole;

    /**
     * @description The error code.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example User not authorized to operate on the specified resource.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The execution duration of the SQL statement.
     *
     * @example 2
     *
     * @var float
     */
    public $executeCost;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $executeState;

    /**
     * @description The type of the query language.
     *
     * @example DQL
     *
     * @var string
     */
    public $operationClass;

    /**
     * @description The time when the SQL statement was executed.
     *
     * @example 2021-03-15T17:02:32Z
     *
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @description The type of the SQL statement.
     *
     * @example SELECT
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The query ID.
     *
     * @example 2548026401648157601713924318883
     *
     * @var string
     */
    public $queryId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description The SQL statement.
     *
     * @example select 1
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The number of entries scanned.
     *
     * @example 1
     *
     * @var int
     */
    public $scanRowCounts;

    /**
     * @description The ID of the session.
     *
     * @example efc33bd7-f1dc-4b24-b4fb-ab0d5329b7bb
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The source IP address.
     *
     * @example 100.**.**.90
     *
     * @var string
     */
    public $sourceIP;

    /**
     * @description The number of the source port.
     *
     * @example 50514
     *
     * @var int
     */
    public $sourcePort;
    protected $_name = [
        'accountName'          => 'AccountName',
        'DBName'               => 'DBName',
        'DBRole'               => 'DBRole',
        'errorCode'            => 'ErrorCode',
        'errorMsg'             => 'ErrorMsg',
        'executeCost'          => 'ExecuteCost',
        'executeState'         => 'ExecuteState',
        'operationClass'       => 'OperationClass',
        'operationExecuteTime' => 'OperationExecuteTime',
        'operationType'        => 'OperationType',
        'queryId'              => 'QueryId',
        'returnRowCounts'      => 'ReturnRowCounts',
        'SQLText'              => 'SQLText',
        'scanRowCounts'        => 'ScanRowCounts',
        'sessionId'            => 'SessionId',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->scanRowCounts) {
            $res['ScanRowCounts'] = $this->scanRowCounts;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
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
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ScanRowCounts'])) {
            $model->scanRowCounts = $map['ScanRowCounts'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
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
