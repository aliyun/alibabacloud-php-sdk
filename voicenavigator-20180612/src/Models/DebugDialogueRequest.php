<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DebugDialogueRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $additionalContext;

    /**
     * @example 7cefbff0-8d50-4d6f-b93c-73cee23c1555
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example abb4aa26-3a8e-43dd-82f8-0c3898c9c67f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $utterance;
    protected $_name = [
        'additionalContext' => 'AdditionalContext',
        'conversationId'    => 'ConversationId',
        'instanceId'        => 'InstanceId',
        'utterance'         => 'Utterance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalContext) {
            $res['AdditionalContext'] = $this->additionalContext;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugDialogueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalContext'])) {
            $model->additionalContext = $map['AdditionalContext'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}
