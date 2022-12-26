<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ChatShrinkRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example chatbot-cn-mp90s2lrk00050
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @example 30002406051
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $perspectiveShrink;

    /**
     * @example custumer_123456
     *
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;

    /**
     * @example 9c6ebdc6e66f46ecadab3434314f6959
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @example {"phone":123456789}
     *
     * @var string
     */
    public $vendorParam;
    protected $_name = [
        'agentKey'          => 'AgentKey',
        'instanceId'        => 'InstanceId',
        'intentName'        => 'IntentName',
        'knowledgeId'       => 'KnowledgeId',
        'perspectiveShrink' => 'Perspective',
        'senderId'          => 'SenderId',
        'senderNick'        => 'SenderNick',
        'sessionId'         => 'SessionId',
        'utterance'         => 'Utterance',
        'vendorParam'       => 'VendorParam',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->perspectiveShrink) {
            $res['Perspective'] = $this->perspectiveShrink;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }
        if (null !== $this->vendorParam) {
            $res['VendorParam'] = $this->vendorParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Perspective'])) {
            $model->perspectiveShrink = $map['Perspective'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }
        if (isset($map['VendorParam'])) {
            $model->vendorParam = $map['VendorParam'];
        }

        return $model;
    }
}
