<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ModelConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var bool
     */
    public $isSelfHost;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var float
     */
    public $topP;

    /**
     * @var bool
     */
    public $useFunctionCall;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'endpoint' => 'Endpoint',
        'isSelfHost' => 'IsSelfHost',
        'name' => 'Name',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
        'useFunctionCall' => 'UseFunctionCall',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->isSelfHost) {
            $res['IsSelfHost'] = $this->isSelfHost;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }
        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
        }
        if (null !== $this->useFunctionCall) {
            $res['UseFunctionCall'] = $this->useFunctionCall;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModelConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['IsSelfHost'])) {
            $model->isSelfHost = $map['IsSelfHost'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }
        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }
        if (isset($map['UseFunctionCall'])) {
            $model->useFunctionCall = $map['UseFunctionCall'];
        }

        return $model;
    }
}
