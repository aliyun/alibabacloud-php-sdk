<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest\input;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest\settings;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest\streamOptions;

class ChatRequest extends Model
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
     * @var input[]
     */
    public $input;

    /**
     * @var string
     */
    public $routingKey;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var settings
     */
    public $settings;

    /**
     * @var streamOptions
     */
    public $streamOptions;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'authorization' => 'Authorization',
        'externalUserId' => 'ExternalUserId',
        'input' => 'Input',
        'routingKey' => 'RoutingKey',
        'sessionId' => 'SessionId',
        'settings' => 'Settings',
        'streamOptions' => 'StreamOptions',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        if (null !== $this->streamOptions) {
            $this->streamOptions->validate();
        }
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

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['Input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['Input'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = $this->routingKey;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
        }

        if (null !== $this->streamOptions) {
            $res['StreamOptions'] = null !== $this->streamOptions ? $this->streamOptions->toArray($noStream) : $this->streamOptions;
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
            if (!empty($map['Input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['Input'] as $item1) {
                    $model->input[$n1] = input::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = $map['RoutingKey'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Settings'])) {
            $model->settings = settings::fromMap($map['Settings']);
        }

        if (isset($map['StreamOptions'])) {
            $model->streamOptions = streamOptions::fromMap($map['StreamOptions']);
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
