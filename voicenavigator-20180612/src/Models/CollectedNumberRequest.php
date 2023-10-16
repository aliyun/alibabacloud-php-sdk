<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class CollectedNumberRequest extends Model
{
    /**
     * @var string
     */
    public $additionalContext;

    /**
     * @example 0099b75d-60fd-4c63-8541-7fbba0ae6bb0
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example 0099b75d-60fd-4c63-8541-7fbba0ae6bb0
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1426738157626835
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @example 1500060224
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'additionalContext' => 'AdditionalContext',
        'conversationId'    => 'ConversationId',
        'instanceId'        => 'InstanceId',
        'instanceOwnerId'   => 'InstanceOwnerId',
        'number'            => 'Number',
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
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CollectedNumberRequest
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
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
