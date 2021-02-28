<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ChatRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $knowledgeId;

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
    public $tag;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var bool
     */
    public $recommend;

    /**
     * @var int
     */
    public $recommendNum;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $defaultPerspective;

    /**
     * @var string
     */
    public $businessScope;

    /**
     * @var string
     */
    public $vendorParam;

    /**
     * @var bool
     */
    public $emotion;

    /**
     * @var bool
     */
    public $sandBox;

    /**
     * @var string[]
     */
    public $perspective;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'sessionId'          => 'SessionId',
        'knowledgeId'        => 'KnowledgeId',
        'senderId'           => 'SenderId',
        'senderNick'         => 'SenderNick',
        'tag'                => 'Tag',
        'utterance'          => 'Utterance',
        'recommend'          => 'Recommend',
        'recommendNum'       => 'RecommendNum',
        'intentName'         => 'IntentName',
        'defaultPerspective' => 'DefaultPerspective',
        'businessScope'      => 'BusinessScope',
        'vendorParam'        => 'VendorParam',
        'emotion'            => 'Emotion',
        'sandBox'            => 'SandBox',
        'perspective'        => 'Perspective',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }
        if (null !== $this->recommend) {
            $res['Recommend'] = $this->recommend;
        }
        if (null !== $this->recommendNum) {
            $res['RecommendNum'] = $this->recommendNum;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->defaultPerspective) {
            $res['DefaultPerspective'] = $this->defaultPerspective;
        }
        if (null !== $this->businessScope) {
            $res['BusinessScope'] = $this->businessScope;
        }
        if (null !== $this->vendorParam) {
            $res['VendorParam'] = $this->vendorParam;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->sandBox) {
            $res['SandBox'] = $this->sandBox;
        }
        if (null !== $this->perspective) {
            $res['Perspective'] = $this->perspective;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }
        if (isset($map['Recommend'])) {
            $model->recommend = $map['Recommend'];
        }
        if (isset($map['RecommendNum'])) {
            $model->recommendNum = $map['RecommendNum'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['DefaultPerspective'])) {
            $model->defaultPerspective = $map['DefaultPerspective'];
        }
        if (isset($map['BusinessScope'])) {
            $model->businessScope = $map['BusinessScope'];
        }
        if (isset($map['VendorParam'])) {
            $model->vendorParam = $map['VendorParam'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['SandBox'])) {
            $model->sandBox = $map['SandBox'];
        }
        if (isset($map['Perspective'])) {
            if (!empty($map['Perspective'])) {
                $model->perspective = $map['Perspective'];
            }
        }

        return $model;
    }
}
