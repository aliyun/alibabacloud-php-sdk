<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListModelCardsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListModelCardsResponseBody\data\availablePaths;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListModelCardsResponseBody\data\meta;

class data extends Model
{
    /**
     * @var availablePaths[]
     */
    public $availablePaths;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var mixed[]
     */
    public $pricing;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var mixed[][]
     */
    public $snapshots;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'availablePaths' => 'availablePaths',
        'features' => 'features',
        'meta' => 'meta',
        'modelName' => 'modelName',
        'pricing' => 'pricing',
        'provider' => 'provider',
        'snapshots' => 'snapshots',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->availablePaths)) {
            Model::validateArray($this->availablePaths);
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->pricing)) {
            Model::validateArray($this->pricing);
        }
        if (\is_array($this->snapshots)) {
            Model::validateArray($this->snapshots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availablePaths) {
            if (\is_array($this->availablePaths)) {
                $res['availablePaths'] = [];
                $n1 = 0;
                foreach ($this->availablePaths as $item1) {
                    $res['availablePaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->pricing) {
            if (\is_array($this->pricing)) {
                $res['pricing'] = [];
                foreach ($this->pricing as $key1 => $value1) {
                    $res['pricing'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->snapshots) {
            if (\is_array($this->snapshots)) {
                $res['snapshots'] = [];
                $n1 = 0;
                foreach ($this->snapshots as $item1) {
                    if (\is_array($item1)) {
                        $res['snapshots'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['snapshots'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['availablePaths'])) {
            if (!empty($map['availablePaths'])) {
                $model->availablePaths = [];
                $n1 = 0;
                foreach ($map['availablePaths'] as $item1) {
                    $model->availablePaths[$n1] = availablePaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = [];
                foreach ($map['features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['pricing'])) {
            if (!empty($map['pricing'])) {
                $model->pricing = [];
                foreach ($map['pricing'] as $key1 => $value1) {
                    $model->pricing[$key1] = $value1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['snapshots'])) {
            if (!empty($map['snapshots'])) {
                $model->snapshots = [];
                $n1 = 0;
                foreach ($map['snapshots'] as $item1) {
                    if (!empty($item1)) {
                        $model->snapshots[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->snapshots[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
