<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00jhtfl8thteu6uj****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The name of the access configuration.
     *
     * @example ECS-Admin
     *
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @description The task status. Valid values:
     *
     *   InProgress: The task is running.
     *   Success: The task is successful.
     *   Failed: The task failed.
     *
     * @example InProgress
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task object.
     *
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the task object.
     *
     * @example dev-test
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The path ID of the task object in the resource directory.
     *
     * @example rd-3G****\/r-Wm****\/114240524784****
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The path name of the task object in the resource directory.
     *
     * @example rd-3G****\/root/dev-test
     *
     * @var string
     */
    public $targetPathName;

    /**
     * @description The type of the task object. The value is fixed as RD-Account, which indicates the accounts in the resource directory.
     *
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The task ID.
     *
     * @example t-sh0655wnq8pdlrlc****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type. The value is fixed as DeprovisionAccessConfiguration, which indicates that the access configuration is de-provisioned.
     *
     * @example DeprovisionAccessConfiguration
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'accessConfigurationId'   => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'status'                  => 'Status',
        'targetId'                => 'TargetId',
        'targetName'              => 'TargetName',
        'targetPath'              => 'TargetPath',
        'targetPathName'          => 'TargetPathName',
        'targetType'              => 'TargetType',
        'taskId'                  => 'TaskId',
        'taskType'                => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetPathName) {
            $res['TargetPathName'] = $this->targetPathName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetPathName'])) {
            $model->targetPathName = $map['TargetPathName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
