<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DownloadRecordingRequest extends Model
{
    /**
     * @example da37319b-6c83-4268-9f19-814aed62e401
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $needVoiceSliceRecording;

    /**
     * @example 744b27f3-437f-4a8c-a181-f668e492fd24
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'needVoiceSliceRecording' => 'NeedVoiceSliceRecording',
        'taskId'                  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->needVoiceSliceRecording) {
            $res['NeedVoiceSliceRecording'] = $this->needVoiceSliceRecording;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NeedVoiceSliceRecording'])) {
            $model->needVoiceSliceRecording = $map['NeedVoiceSliceRecording'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
