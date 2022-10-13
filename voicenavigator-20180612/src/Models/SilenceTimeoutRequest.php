<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class SilenceTimeoutRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $initialContext;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceOwnerId;
    protected $_name = [
        'conversationId'  => 'ConversationId',
        'initialContext'  => 'InitialContext',
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
        if (null !== $this->initialContext) {
            $res['InitialContext'] = $this->initialContext;
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
     * @return SilenceTimeoutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['InitialContext'])) {
            $model->initialContext = $map['InitialContext'];
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
