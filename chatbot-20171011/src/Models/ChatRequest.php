<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ChatRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string[]
     */
    public $perspective;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var string
     */
    public $vendorParam;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'instanceId'  => 'InstanceId',
        'intentName'  => 'IntentName',
        'knowledgeId' => 'KnowledgeId',
        'perspective' => 'Perspective',
        'senderId'    => 'SenderId',
        'senderNick'  => 'SenderNick',
        'sessionId'   => 'SessionId',
        'tag'         => 'Tag',
        'utterance'   => 'Utterance',
        'vendorParam' => 'VendorParam',
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
        if (null !== $this->perspective) {
            $res['Perspective'] = $this->perspective;
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
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
     * @return ChatRequest
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
            if (!empty($map['Perspective'])) {
                $model->perspective = $map['Perspective'];
            }
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
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
