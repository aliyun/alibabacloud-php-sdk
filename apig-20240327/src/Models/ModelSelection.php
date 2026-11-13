<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelSelection\fallbackChains;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelSelection\models;

class ModelSelection extends Model
{
    /**
     * @var bool
     */
    public $convenienceAliasEnabled;

    /**
     * @var string[]
     */
    public $endpoints;

    /**
     * @var fallbackChains[]
     */
    public $fallbackChains;

    /**
     * @var string[]
     */
    public $modelGroupIds;

    /**
     * @var models[]
     */
    public $models;
    protected $_name = [
        'convenienceAliasEnabled' => 'convenienceAliasEnabled',
        'endpoints' => 'endpoints',
        'fallbackChains' => 'fallbackChains',
        'modelGroupIds' => 'modelGroupIds',
        'models' => 'models',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->fallbackChains)) {
            Model::validateArray($this->fallbackChains);
        }
        if (\is_array($this->modelGroupIds)) {
            Model::validateArray($this->modelGroupIds);
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->convenienceAliasEnabled) {
            $res['convenienceAliasEnabled'] = $this->convenienceAliasEnabled;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fallbackChains) {
            if (\is_array($this->fallbackChains)) {
                $res['fallbackChains'] = [];
                $n1 = 0;
                foreach ($this->fallbackChains as $item1) {
                    $res['fallbackChains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelGroupIds) {
            if (\is_array($this->modelGroupIds)) {
                $res['modelGroupIds'] = [];
                $n1 = 0;
                foreach ($this->modelGroupIds as $item1) {
                    $res['modelGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['convenienceAliasEnabled'])) {
            $model->convenienceAliasEnabled = $map['convenienceAliasEnabled'];
        }

        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fallbackChains'])) {
            if (!empty($map['fallbackChains'])) {
                $model->fallbackChains = [];
                $n1 = 0;
                foreach ($map['fallbackChains'] as $item1) {
                    $model->fallbackChains[$n1] = fallbackChains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelGroupIds'])) {
            if (!empty($map['modelGroupIds'])) {
                $model->modelGroupIds = [];
                $n1 = 0;
                foreach ($map['modelGroupIds'] as $item1) {
                    $model->modelGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
