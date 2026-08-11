<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models\inferenceMetadata;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models\modelInfo;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models\prices;

class models extends Model
{
    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var inferenceMetadata
     */
    public $inferenceMetadata;

    /**
     * @var string
     */
    public $model;

    /**
     * @var modelInfo
     */
    public $modelInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var prices[]
     */
    public $prices;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $publishedTime;
    protected $_name = [
        'capabilities' => 'capabilities',
        'description' => 'description',
        'features' => 'features',
        'inferenceMetadata' => 'inferenceMetadata',
        'model' => 'model',
        'modelInfo' => 'modelInfo',
        'name' => 'name',
        'prices' => 'prices',
        'provider' => 'provider',
        'publishedTime' => 'publishedTime',
    ];

    public function validate()
    {
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->inferenceMetadata) {
            $this->inferenceMetadata->validate();
        }
        if (null !== $this->modelInfo) {
            $this->modelInfo->validate();
        }
        if (\is_array($this->prices)) {
            Model::validateArray($this->prices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['capabilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['features'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inferenceMetadata) {
            $res['inferenceMetadata'] = null !== $this->inferenceMetadata ? $this->inferenceMetadata->toArray($noStream) : $this->inferenceMetadata;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->modelInfo) {
            $res['modelInfo'] = null !== $this->modelInfo ? $this->modelInfo->toArray($noStream) : $this->modelInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->prices) {
            if (\is_array($this->prices)) {
                $res['prices'] = [];
                $n1 = 0;
                foreach ($this->prices as $item1) {
                    $res['prices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->publishedTime) {
            $res['publishedTime'] = $this->publishedTime;
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
        if (isset($map['capabilities'])) {
            if (!empty($map['capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['features'] as $item1) {
                    $model->features[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['inferenceMetadata'])) {
            $model->inferenceMetadata = inferenceMetadata::fromMap($map['inferenceMetadata']);
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['modelInfo'])) {
            $model->modelInfo = modelInfo::fromMap($map['modelInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['prices'])) {
            if (!empty($map['prices'])) {
                $model->prices = [];
                $n1 = 0;
                foreach ($map['prices'] as $item1) {
                    $model->prices[$n1] = prices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['publishedTime'])) {
            $model->publishedTime = $map['publishedTime'];
        }

        return $model;
    }
}
