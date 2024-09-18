<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkBatchSQL extends Model
{
    /**
     * @example amv-xxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example schema is not found
     *
     * @var string
     */
    public $errMessage;

    /**
     * @example query
     *
     * @var string
     */
    public $query;

    /**
     * @example 1723521767000
     *
     * @var int
     */
    public $queryEndTime;

    /**
     * @example amv-202401-xx
     *
     * @var string
     */
    public $queryId;

    /**
     * @example 1723521767000
     *
     * @var int
     */
    public $queryStartTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $queryState;

    /**
     * @example 1723521767000
     *
     * @var int
     */
    public $querySubmissionTime;

    /**
     * @example spark_rg
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @var SparkBatchSQLStatement[]
     */
    public $statements;

    /**
     * @example 12222222
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'DBClusterId'         => 'DBClusterId',
        'errMessage'          => 'ErrMessage',
        'query'               => 'Query',
        'queryEndTime'        => 'QueryEndTime',
        'queryId'             => 'QueryId',
        'queryStartTime'      => 'QueryStartTime',
        'queryState'          => 'QueryState',
        'querySubmissionTime' => 'QuerySubmissionTime',
        'resourceGroupName'   => 'ResourceGroupName',
        'schema'              => 'Schema',
        'statements'          => 'Statements',
        'uid'                 => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->queryState) {
            $res['QueryState'] = $this->queryState;
        }
        if (null !== $this->querySubmissionTime) {
            $res['QuerySubmissionTime'] = $this->querySubmissionTime;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->statements) {
            $res['Statements'] = [];
            if (null !== $this->statements && \is_array($this->statements)) {
                $n = 0;
                foreach ($this->statements as $item) {
                    $res['Statements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SparkBatchSQL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['QueryState'])) {
            $model->queryState = $map['QueryState'];
        }
        if (isset($map['QuerySubmissionTime'])) {
            $model->querySubmissionTime = $map['QuerySubmissionTime'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Statements'])) {
            if (!empty($map['Statements'])) {
                $model->statements = [];
                $n                 = 0;
                foreach ($map['Statements'] as $item) {
                    $model->statements[$n++] = null !== $item ? SparkBatchSQLStatement::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
