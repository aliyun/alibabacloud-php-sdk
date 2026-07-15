<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponseBody\data\availablePaths;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponseBody\data\credit;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponseBody\data\meta;

class data extends Model
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
     * @var string
     */
    public $gatewayId;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelProvider;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'availablePaths' => 'availablePaths',
        'credit' => 'credit',
        'features' => 'features',
        'gatewayId' => 'gatewayId',
        'meta' => 'meta',
        'modelCardId' => 'modelCardId',
        'modelName' => 'modelName',
        'modelProvider' => 'modelProvider',
        'source' => 'source',
        'updateTime' => 'updateTime',
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

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelProvider) {
            $res['modelProvider'] = $this->modelProvider;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelProvider'])) {
            $model->modelProvider = $map['modelProvider'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
