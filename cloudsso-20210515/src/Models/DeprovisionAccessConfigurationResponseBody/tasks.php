<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeprovisionAccessConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetPathName;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'status' => 'Status',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetPath' => 'TargetPath',
        'targetPathName' => 'TargetPathName',
        'targetType' => 'TargetType',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
