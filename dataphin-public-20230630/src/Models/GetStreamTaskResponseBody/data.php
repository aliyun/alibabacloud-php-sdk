<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStreamTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $consumeLocationDate;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectMode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceQueue;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'consumeLocationDate' => 'ConsumeLocationDate',
        'engineVersion' => 'EngineVersion',
        'fileId' => 'FileId',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'operatorId' => 'OperatorId',
        'operatorName' => 'OperatorName',
        'projectId' => 'ProjectId',
        'projectMode' => 'ProjectMode',
        'projectName' => 'ProjectName',
        'resourceQueue' => 'ResourceQueue',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeLocationDate) {
            $res['ConsumeLocationDate'] = $this->consumeLocationDate;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->resourceQueue) {
            $res['ResourceQueue'] = $this->resourceQueue;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConsumeLocationDate'])) {
            $model->consumeLocationDate = $map['ConsumeLocationDate'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ResourceQueue'])) {
            $model->resourceQueue = $map['ResourceQueue'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
