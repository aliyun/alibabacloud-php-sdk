<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListAgenticSqlExecutionHistoriesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actorId;

    /**
     * @var string
     */
    public $actorName;

    /**
     * @var string
     */
    public $actorType;

    /**
     * @var int
     */
    public $affectedRows;

    /**
     * @var string
     */
    public $agentOwnerId;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $databaseSearchName;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $executedSql;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $originalSql;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var int
     */
    public $returnedRows;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'actorId' => 'ActorId',
        'actorName' => 'ActorName',
        'actorType' => 'ActorType',
        'affectedRows' => 'AffectedRows',
        'agentOwnerId' => 'AgentOwnerId',
        'catalogUuid' => 'CatalogUuid',
        'clientIp' => 'ClientIp',
        'cost' => 'Cost',
        'databaseSearchName' => 'DatabaseSearchName',
        'databaseUuid' => 'DatabaseUuid',
        'error' => 'Error',
        'executedSql' => 'ExecutedSql',
        'executionStatus' => 'ExecutionStatus',
        'originalSql' => 'OriginalSql',
        'queryId' => 'QueryId',
        'returnedRows' => 'ReturnedRows',
        'scenario' => 'Scenario',
        'sqlType' => 'SqlType',
        'startTime' => 'StartTime',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actorId) {
            $res['ActorId'] = $this->actorId;
        }

        if (null !== $this->actorName) {
            $res['ActorName'] = $this->actorName;
        }

        if (null !== $this->actorType) {
            $res['ActorType'] = $this->actorType;
        }

        if (null !== $this->affectedRows) {
            $res['AffectedRows'] = $this->affectedRows;
        }

        if (null !== $this->agentOwnerId) {
            $res['AgentOwnerId'] = $this->agentOwnerId;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->databaseSearchName) {
            $res['DatabaseSearchName'] = $this->databaseSearchName;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->executedSql) {
            $res['ExecutedSql'] = $this->executedSql;
        }

        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }

        if (null !== $this->originalSql) {
            $res['OriginalSql'] = $this->originalSql;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        if (null !== $this->returnedRows) {
            $res['ReturnedRows'] = $this->returnedRows;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['ActorId'])) {
            $model->actorId = $map['ActorId'];
        }

        if (isset($map['ActorName'])) {
            $model->actorName = $map['ActorName'];
        }

        if (isset($map['ActorType'])) {
            $model->actorType = $map['ActorType'];
        }

        if (isset($map['AffectedRows'])) {
            $model->affectedRows = $map['AffectedRows'];
        }

        if (isset($map['AgentOwnerId'])) {
            $model->agentOwnerId = $map['AgentOwnerId'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['DatabaseSearchName'])) {
            $model->databaseSearchName = $map['DatabaseSearchName'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['ExecutedSql'])) {
            $model->executedSql = $map['ExecutedSql'];
        }

        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }

        if (isset($map['OriginalSql'])) {
            $model->originalSql = $map['OriginalSql'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        if (isset($map['ReturnedRows'])) {
            $model->returnedRows = $map['ReturnedRows'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
