<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SubmitRecordingRequest extends Model
{
    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {"contactId":"3d35c0487cc041abb7ad0ce61752601f","duration":27,"fileName":"ce2659e5-a20b-4f8e-91b5-5cd909c6b96e_3d35c0487cc041abb7ad0ce61752601f.wav","filePath":"oss://ForCompatibility/waveforms/","startTime":1579057583670,"type":"Merged"}
     *
     * @var string
     */
    public $mergedRecording;

    /**
     * @example {"contactId":"3d35c0487cc041abb7ad0ce61752601f","duration":27,"fileName":"ce2659e5-a20b-4f8e-91b5-5cd909c6b96e_3d35c0487cc041abb7ad0ce61752601f.wav","filePath":"oss://ForCompatibility/waveforms/","startTime":1579057583670,"type":"Source"}
     *
     * @var string
     */
    public $resourceRecording;

    /**
     * @example e4e2a770-b97b-465a-80d8-06dca008c503
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'mergedRecording'   => 'MergedRecording',
        'resourceRecording' => 'ResourceRecording',
        'taskId'            => 'TaskId',
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
     * @return SubmitRecordingRequest
     */
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
