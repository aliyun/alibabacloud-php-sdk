<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class BeginDialogueRequest extends Model
{
    /**
     * @example 10086
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description This parameter is required.
     *
     * @example 1358158****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @description This parameter is required.
     *
     * @example c28fc549-d88f-4f6e-85ad-a0806e5e39c0
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example {\\"channelId\\":\\"fe2559d3-5fc9-4fa5-8314-32b9f762791d\\"}
     *
     * @var string
     */
    public $initialContext;

    /**
     * @description This parameter is required.
     *
     * @example 4d7db6670b8e41b5adb1f21560ea9272
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1231639035307976
     *
     * @var int
     */
    public $instanceOwnerId;
    protected $_name = [
        'calledNumber'    => 'CalledNumber',
        'callingNumber'   => 'CallingNumber',
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
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
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
     * @return BeginDialogueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
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
