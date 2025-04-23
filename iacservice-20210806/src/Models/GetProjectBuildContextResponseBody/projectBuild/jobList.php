<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild;

use AlibabaCloud\Dara\Model;

class jobList extends Model
{
    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var bool
     */
    public $isPassAssertCheck;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

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
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'elapsedTime' => 'elapsedTime',
        'isDeleted' => 'isDeleted',
        'isPassAssertCheck' => 'isPassAssertCheck',
        'jobId' => 'jobId',
        'moduleId' => 'moduleId',
        'moduleName' => 'moduleName',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'status' => 'status',
        'taskId' => 'taskId',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }

        if (null !== $this->isPassAssertCheck) {
            $res['isPassAssertCheck'] = $this->isPassAssertCheck;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }

        if (isset($map['isPassAssertCheck'])) {
            $model->isPassAssertCheck = $map['isPassAssertCheck'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
