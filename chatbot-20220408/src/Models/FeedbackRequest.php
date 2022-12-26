<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class FeedbackRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example good
     *
     * @var string
     */
    public $feedback;

    /**
     * @example 这个回答很棒
     *
     * @var string
     */
    public $feedbackContent;

    /**
     * @example chatbot-cn-mp90s2lrk00050
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 5ca40988-4f99-47ad-ac96-9060d0f81db9
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 7c3cec23cc8940bc9db4a318c8f4f0aa
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'feedback'        => 'Feedback',
        'feedbackContent' => 'FeedbackContent',
        'instanceId'      => 'InstanceId',
        'messageId'       => 'MessageId',
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
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->feedbackContent) {
            $res['FeedbackContent'] = $this->feedbackContent;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['FeedbackContent'])) {
            $model->feedbackContent = $map['FeedbackContent'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
