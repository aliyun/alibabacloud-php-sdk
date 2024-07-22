<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class EndDialogueRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8fb819b5-d032-48a9-ae5e-cff041b83596
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example {\\"duration\\":40,\\"endTime\\":1645082505345,\\"hangUpDirection\\":\\"ivr\\",\\"hasLastPlaybackCompleted\\":true,\\"startTime\\":1645082505305}
     *
     * @var string
     */
    public $hangUpParams;

    /**
     * @description This parameter is required.
     *
     * @example e48e45dd-e47a-4744-a063-f08cbebb1c5a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1399572315967217
     *
     * @var int
     */
    public $instanceOwnerId;
    protected $_name = [
        'conversationId'  => 'ConversationId',
        'hangUpParams'    => 'HangUpParams',
        'instanceId'      => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
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
        if (null !== $this->hangUpParams) {
            $res['HangUpParams'] = $this->hangUpParams;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EndDialogueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['HangUpParams'])) {
            $model->hangUpParams = $map['HangUpParams'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }

        return $model;
    }
}
