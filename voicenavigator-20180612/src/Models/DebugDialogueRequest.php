<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class DebugDialogueRequest extends Model
{
    /**
     * @var string
     */
    public $additionalContext;
    /**
     * @var string
     */
    public $conversationId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
