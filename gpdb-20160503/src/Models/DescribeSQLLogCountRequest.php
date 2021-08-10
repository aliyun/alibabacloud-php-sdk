<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogCountRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $queryKeywords;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $executeCost;

    /**
     * @var string
     */
    public $sourceIP;

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
    protected $_name = [
        'DBInstanceId'   => 'DBInstanceId',
        'queryKeywords'  => 'QueryKeywords',
        'startTime'      => 'StartTime',
        'database'       => 'Database',
        'user'           => 'User',
        'endTime'        => 'EndTime',
        'executeCost'    => 'ExecuteCost',
        'sourceIP'       => 'SourceIP',
        'executeState'   => 'ExecuteState',
        'operationClass' => 'OperationClass',
        'operationType'  => 'OperationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->queryKeywords) {
            $res['QueryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->sourceIP) {
            $res['SourceIP'] = $this->sourceIP;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['QueryKeywords'])) {
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['SourceIP'])) {
            $model->sourceIP = $map['SourceIP'];
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

        return $model;
    }
}
