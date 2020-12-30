<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class SubmitCabRecordingRequest extends Model
{
    /**
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $resourceRecording;

    /**
     * @var string
     */
    public $mergedRecording;
    protected $_name = [
        'instanceOwnerId'   => 'InstanceOwnerId',
        'instanceId'        => 'InstanceId',
        'taskId'            => 'TaskId',
        'resourceRecording' => 'ResourceRecording',
        'mergedRecording'   => 'MergedRecording',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->resourceRecording) {
            $res['ResourceRecording'] = $this->resourceRecording;
        }
        if (null !== $this->mergedRecording) {
            $res['MergedRecording'] = $this->mergedRecording;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCabRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ResourceRecording'])) {
            $model->resourceRecording = $map['ResourceRecording'];
        }
        if (isset($map['MergedRecording'])) {
            $model->mergedRecording = $map['MergedRecording'];
        }

        return $model;
    }
}
