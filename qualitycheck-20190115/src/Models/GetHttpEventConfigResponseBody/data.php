<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHttpEventConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetHttpEventConfigResponseBody\data\eventConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var eventConfig
     */
    public $eventConfig;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var bool
     */
    public $switchFlag;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'eventConfig' => 'EventConfig',
        'httpMethod' => 'HttpMethod',
        'switchFlag' => 'SwitchFlag',
    ];

    public function validate()
    {
        if (null !== $this->eventConfig) {
            $this->eventConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->eventConfig) {
            $res['EventConfig'] = null !== $this->eventConfig ? $this->eventConfig->toArray($noStream) : $this->eventConfig;
        }

        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }

        if (null !== $this->switchFlag) {
            $res['SwitchFlag'] = $this->switchFlag;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['EventConfig'])) {
            $model->eventConfig = eventConfig::fromMap($map['EventConfig']);
        }

        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }

        if (isset($map['SwitchFlag'])) {
            $model->switchFlag = $map['SwitchFlag'];
        }

        return $model;
    }
}
