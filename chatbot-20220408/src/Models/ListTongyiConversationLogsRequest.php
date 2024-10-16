<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ListTongyiConversationLogsRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example chatbot-cn-7QuUfaqMQe
     *
     * @var string
     */
    public $robotInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example 7c3cec23cc8940bc9db4a318c8f4f0aa
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'robotInstanceId' => 'RobotInstanceId',
        'sessionId'       => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->robotInstanceId) {
            $res['RobotInstanceId'] = $this->robotInstanceId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTongyiConversationLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['RobotInstanceId'])) {
            $model->robotInstanceId = $map['RobotInstanceId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
