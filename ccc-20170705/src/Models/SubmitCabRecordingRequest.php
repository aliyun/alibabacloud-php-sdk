<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class SubmitCabRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $earlyMediaRecording;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @var string
     */
    public $mergedRecording;

    /**
     * @var string
     */
    public $resourceRecording;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'earlyMediaRecording' => 'EarlyMediaRecording',
        'instanceId'          => 'InstanceId',
        'instanceOwnerId'     => 'InstanceOwnerId',
        'mergedRecording'     => 'MergedRecording',
        'resourceRecording'   => 'ResourceRecording',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->earlyMediaRecording) {
            $res['EarlyMediaRecording'] = $this->earlyMediaRecording;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->mergedRecording) {
            $res['MergedRecording'] = $this->mergedRecording;
        }
        if (null !== $this->resourceRecording) {
            $res['ResourceRecording'] = $this->resourceRecording;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['EarlyMediaRecording'])) {
            $model->earlyMediaRecording = $map['EarlyMediaRecording'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['MergedRecording'])) {
            $model->mergedRecording = $map['MergedRecording'];
        }
        if (isset($map['ResourceRecording'])) {
            $model->resourceRecording = $map['ResourceRecording'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
