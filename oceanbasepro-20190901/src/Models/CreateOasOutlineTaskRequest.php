<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateOasOutlineTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $bySqlId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var bool
     */
    public $dynamicSql;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isConcurrentLimit;

    /**
     * @var int
     */
    public $maxConcurrent;

    /**
     * @var string
     */
    public $planData;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statementId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $UId;
    protected $_name = [
        'bySqlId' => 'BySqlId',
        'databaseName' => 'DatabaseName',
        'dynamicSql' => 'DynamicSql',
        'endTime' => 'EndTime',
        'indexName' => 'IndexName',
        'instanceId' => 'InstanceId',
        'isConcurrentLimit' => 'IsConcurrentLimit',
        'maxConcurrent' => 'MaxConcurrent',
        'planData' => 'PlanData',
        'sqlId' => 'SqlId',
        'sqlText' => 'SqlText',
        'startTime' => 'StartTime',
        'statementId' => 'StatementId',
        'tableName' => 'TableName',
        'tenantId' => 'TenantId',
        'UId' => 'UId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bySqlId) {
            $res['BySqlId'] = $this->bySqlId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isConcurrentLimit) {
            $res['IsConcurrentLimit'] = $this->isConcurrentLimit;
        }

        if (null !== $this->maxConcurrent) {
            $res['MaxConcurrent'] = $this->maxConcurrent;
        }

        if (null !== $this->planData) {
            $res['PlanData'] = $this->planData;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
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
        if (isset($map['BySqlId'])) {
            $model->bySqlId = $map['BySqlId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsConcurrentLimit'])) {
            $model->isConcurrentLimit = $map['IsConcurrentLimit'];
        }

        if (isset($map['MaxConcurrent'])) {
            $model->maxConcurrent = $map['MaxConcurrent'];
        }

        if (isset($map['PlanData'])) {
            $model->planData = $map['PlanData'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        return $model;
    }
}
