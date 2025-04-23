<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTasksResponseBody;

use AlibabaCloud\Dara\Model;

class ramPolicyExportTasks extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentPolicyStatus;

    /**
     * @var string
     */
    public $currentPolicyVersion;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $exportTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ramPolicyExportTaskId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskOutputPath;
    protected $_name = [
        'createTime' => 'createTime',
        'currentPolicyStatus' => 'currentPolicyStatus',
        'currentPolicyVersion' => 'currentPolicyVersion',
        'elapsedTime' => 'elapsedTime',
        'exportTime' => 'exportTime',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'ramPolicyExportTaskId' => 'ramPolicyExportTaskId',
        'status' => 'status',
        'taskOutputPath' => 'taskOutputPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentPolicyStatus) {
            $res['currentPolicyStatus'] = $this->currentPolicyStatus;
        }

        if (null !== $this->currentPolicyVersion) {
            $res['currentPolicyVersion'] = $this->currentPolicyVersion;
        }

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->exportTime) {
            $res['exportTime'] = $this->exportTime;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramPolicyExportTaskId) {
            $res['ramPolicyExportTaskId'] = $this->ramPolicyExportTaskId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentPolicyStatus'])) {
            $model->currentPolicyStatus = $map['currentPolicyStatus'];
        }

        if (isset($map['currentPolicyVersion'])) {
            $model->currentPolicyVersion = $map['currentPolicyVersion'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['exportTime'])) {
            $model->exportTime = $map['exportTime'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramPolicyExportTaskId'])) {
            $model->ramPolicyExportTaskId = $map['ramPolicyExportTaskId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }

        return $model;
    }
}
