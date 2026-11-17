<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\input;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\parameters;

class CameraConsoleDebugStreamRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'config' => 'config',
        'input' => 'input',
        'instanceId' => 'instanceId',
        'parameters' => 'parameters',
        'requestId' => 'requestId',
        'scenario' => 'scenario',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->input) {
            $res['input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['input'])) {
            $model->input = input::fromMap($map['input']);
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
