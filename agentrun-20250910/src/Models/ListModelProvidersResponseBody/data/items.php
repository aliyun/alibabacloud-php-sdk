<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ListModelProvidersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ModelInfoConfig;

class items extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var ModelInfoConfig
     */
    public $modelInfoConfig;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string[]
     */
    public $models;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'baseUrl' => 'baseUrl',
        'modelInfoConfig' => 'modelInfoConfig',
        'modelType' => 'modelType',
        'models' => 'models',
        'providerName' => 'providerName',
    ];

    public function validate()
    {
        if (null !== $this->modelInfoConfig) {
            $this->modelInfoConfig->validate();
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->modelInfoConfig) {
            $res['modelInfoConfig'] = null !== $this->modelInfoConfig ? $this->modelInfoConfig->toArray($noStream) : $this->modelInfoConfig;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->providerName) {
            $res['providerName'] = $this->providerName;
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
        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['modelInfoConfig'])) {
            $model->modelInfoConfig = ModelInfoConfig::fromMap($map['modelInfoConfig']);
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['providerName'])) {
            $model->providerName = $map['providerName'];
        }

        return $model;
    }
}
