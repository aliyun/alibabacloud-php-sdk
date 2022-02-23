<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class FeedbackRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'feedback'   => 'Feedback',
        'instanceId' => 'InstanceId',
        'messageId'  => 'MessageId',
        'sessionId'  => 'SessionId',
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
