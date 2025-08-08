<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\ModelSetSpec\features;

class ModelSetSpec extends Model
{
    /**
     * @var string
     */
    public $apiInvokeType;

    /**
     * @var Authorization
     */
    public $authConfig;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var features
     */
    public $features;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var ModelSetModelProfile[]
     */
    public $models;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'apiInvokeType' => 'apiInvokeType',
        'authConfig' => 'authConfig',
        'baseUrl' => 'baseUrl',
        'features' => 'features',
        'modelType' => 'modelType',
        'models' => 'models',
        'provider' => 'provider',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (null !== $this->features) {
            $this->features->validate();
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInvokeType) {
            $res['apiInvokeType'] = $this->apiInvokeType;
        }

        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->features) {
            $res['features'] = null !== $this->features ? $this->features->toArray($noStream) : $this->features;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['apiInvokeType'])) {
            $model->apiInvokeType = $map['apiInvokeType'];
        }

        if (isset($map['authConfig'])) {
            $model->authConfig = Authorization::fromMap($map['authConfig']);
        }

        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['features'])) {
            $model->features = features::fromMap($map['features']);
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = ModelSetModelProfile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
