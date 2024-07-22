<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DebugBeginDialogueRequest extends Model
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
     * @example 135815*****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @description This parameter is required.
     *
     * @example 8a503680-815d-473e-a9b0-e010f47a64d2
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example {}
     *
     * @var string
     */
    public $initialContext;

    /**
     * @description This parameter is required.
     *
     * @example 8a503680-815d-473e-a9b0-e010f47a64d2
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'calledNumber'   => 'CalledNumber',
        'callingNumber'  => 'CallingNumber',
        'conversationId' => 'ConversationId',
        'initialContext' => 'InitialContext',
        'instanceId'     => 'InstanceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugBeginDialogueRequest
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

        return $model;
    }
}
