<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SubmitRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

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
        'instanceId' => 'InstanceId',
        'mergedRecording' => 'MergedRecording',
        'resourceRecording' => 'ResourceRecording',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
