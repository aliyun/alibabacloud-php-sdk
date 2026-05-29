<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models;

use AlibabaCloud\Dara\Model;

class ChatShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $routingKey;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $settingsShrink;

    /**
     * @var string
     */
    public $streamOptionsShrink;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'authorization' => 'Authorization',
        'externalUserId' => 'ExternalUserId',
        'inputShrink' => 'Input',
        'routingKey' => 'RoutingKey',
        'sessionId' => 'SessionId',
        'settingsShrink' => 'Settings',
        'streamOptionsShrink' => 'StreamOptions',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = $this->routingKey;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->settingsShrink) {
            $res['Settings'] = $this->settingsShrink;
        }

        if (null !== $this->streamOptionsShrink) {
            $res['StreamOptions'] = $this->streamOptionsShrink;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = $map['RoutingKey'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Settings'])) {
            $model->settingsShrink = $map['Settings'];
        }

        if (isset($map['StreamOptions'])) {
            $model->streamOptionsShrink = $map['StreamOptions'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
