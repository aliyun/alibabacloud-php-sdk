<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SparkBatchSQL extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $queryEndTime;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var int
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $queryState;

    /**
     * @var int
     */
    public $querySubmissionTime;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var SparkBatchSQLStatement[]
     */
    public $statements;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'errMessage' => 'ErrMessage',
        'query' => 'Query',
        'queryEndTime' => 'QueryEndTime',
        'queryId' => 'QueryId',
        'queryStartTime' => 'QueryStartTime',
        'queryState' => 'QueryState',
        'querySubmissionTime' => 'QuerySubmissionTime',
        'resourceGroupName' => 'ResourceGroupName',
        'schema' => 'Schema',
        'statements' => 'Statements',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->statements)) {
            Model::validateArray($this->statements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->statements)) {
                $res['Statements'] = [];
                $n1 = 0;
                foreach ($this->statements as $item1) {
                    $res['Statements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
                $n1 = 0;
                foreach ($map['Statements'] as $item1) {
                    $model->statements[$n1] = SparkBatchSQLStatement::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
