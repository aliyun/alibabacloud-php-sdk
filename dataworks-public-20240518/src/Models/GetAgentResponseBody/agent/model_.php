<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAgentResponseBody\agent;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'config' => 'Config',
        'maxTokens' => 'MaxTokens',
        'modelName' => 'ModelName',
        'stream' => 'Stream',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['Config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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
            if (!empty($map['Config'])) {
                $model->config = [];
                foreach ($map['Config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
