<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $needVoiceSliceRecording;
    protected $_name = [
        'conversationId'          => 'ConversationId',
        'instanceId'              => 'InstanceId',
        'needVoiceSliceRecording' => 'NeedVoiceSliceRecording',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->needVoiceSliceRecording) {
            $res['NeedVoiceSliceRecording'] = $this->needVoiceSliceRecording;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NeedVoiceSliceRecording'])) {
            $model->needVoiceSliceRecording = $map['NeedVoiceSliceRecording'];
        }

        return $model;
    }
}
