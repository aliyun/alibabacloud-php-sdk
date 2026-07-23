<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantRequest\contents;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantRequest\inputMessage;

class ShoppingAssistantRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var contents
     */
    public $contents;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $environment;

    /**
     * @var inputMessage
     */
    public $inputMessage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'config' => 'Config',
        'contents' => 'Contents',
        'conversationId' => 'ConversationId',
        'environment' => 'Environment',
        'inputMessage' => 'InputMessage',
        'instanceId' => 'InstanceId',
        'language' => 'Language',
        'sceneId' => 'SceneId',
        'serviceId' => 'ServiceId',
        'sessionId' => 'SessionId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->contents) {
            $this->contents->validate();
        }
        if (null !== $this->inputMessage) {
            $this->inputMessage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->contents) {
            $res['Contents'] = null !== $this->contents ? $this->contents->toArray($noStream) : $this->contents;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        if (null !== $this->inputMessage) {
            $res['InputMessage'] = null !== $this->inputMessage ? $this->inputMessage->toArray($noStream) : $this->inputMessage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Contents'])) {
            $model->contents = contents::fromMap($map['Contents']);
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        if (isset($map['InputMessage'])) {
            $model->inputMessage = inputMessage::fromMap($map['InputMessage']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
