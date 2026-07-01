<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListOperationRecordResponseBody\operationLogListResponse;

use AlibabaCloud\Dara\Model;

class resultData extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var int
     */
    public $codeType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $operationId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $relationTables;

    /**
     * @var string
     */
    public $runner;

    /**
     * @var string
     */
    public $runnerName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'codeType' => 'CodeType',
        'duration' => 'Duration',
        'id' => 'Id',
        'name' => 'Name',
        'objectType' => 'ObjectType',
        'operationId' => 'OperationId',
        'projectId' => 'ProjectId',
        'relationTables' => 'RelationTables',
        'runner' => 'Runner',
        'runnerName' => 'RunnerName',
        'status' => 'Status',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->relationTables)) {
            Model::validateArray($this->relationTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->relationTables) {
            if (\is_array($this->relationTables)) {
                $res['RelationTables'] = [];
                $n1 = 0;
                foreach ($this->relationTables as $item1) {
                    $res['RelationTables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runner) {
            $res['Runner'] = $this->runner;
        }

        if (null !== $this->runnerName) {
            $res['RunnerName'] = $this->runnerName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RelationTables'])) {
            if (!empty($map['RelationTables'])) {
                $model->relationTables = [];
                $n1 = 0;
                foreach ($map['RelationTables'] as $item1) {
                    $model->relationTables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Runner'])) {
            $model->runner = $map['Runner'];
        }

        if (isset($map['RunnerName'])) {
            $model->runnerName = $map['RunnerName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
