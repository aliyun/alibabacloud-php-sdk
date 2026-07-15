<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardRequest\availablePaths;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardRequest\credit;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardRequest\meta;

class UpdateAiModelCardRequest extends Model
{
    /**
     * @var availablePaths[]
     */
    public $availablePaths;

    /**
     * @var credit
     */
    public $credit;

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
     * @var string
     */
    public $modelProvider;
    protected $_name = [
        'availablePaths' => 'availablePaths',
        'credit' => 'credit',
        'features' => 'features',
        'meta' => 'meta',
        'modelName' => 'modelName',
        'modelProvider' => 'modelProvider',
    ];

    public function validate()
    {
        if (\is_array($this->availablePaths)) {
            Model::validateArray($this->availablePaths);
        }
        if (null !== $this->credit) {
            $this->credit->validate();
        }
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
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

        if (null !== $this->credit) {
            $res['credit'] = null !== $this->credit ? $this->credit->toArray($noStream) : $this->credit;
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

        if (null !== $this->modelProvider) {
            $res['modelProvider'] = $this->modelProvider;
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

        if (isset($map['credit'])) {
            $model->credit = credit::fromMap($map['credit']);
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

        if (isset($map['modelProvider'])) {
            $model->modelProvider = $map['modelProvider'];
        }

        return $model;
    }
}
