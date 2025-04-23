<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\processor;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\storage;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\swift;

class result extends Model
{
    /**
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @var extend
     */
    public $extend;

    /**
     * @var processor
     */
    public $processor;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @var swift
     */
    public $swift;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'extend' => 'extend',
        'processor' => 'processor',
        'storage' => 'storage',
        'swift' => 'swift',
    ];

    public function validate()
    {
        if (null !== $this->extend) {
            $this->extend->validate();
        }
        if (null !== $this->processor) {
            $this->processor->validate();
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        if (null !== $this->swift) {
            $this->swift->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }

        if (null !== $this->extend) {
            $res['extend'] = null !== $this->extend ? $this->extend->toArray($noStream) : $this->extend;
        }

        if (null !== $this->processor) {
            $res['processor'] = null !== $this->processor ? $this->processor->toArray($noStream) : $this->processor;
        }

        if (null !== $this->storage) {
            $res['storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
        }

        if (null !== $this->swift) {
            $res['swift'] = null !== $this->swift ? $this->swift->toArray($noStream) : $this->swift;
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
        if (isset($map['autoBuildIndex'])) {
            $model->autoBuildIndex = $map['autoBuildIndex'];
        }

        if (isset($map['extend'])) {
            $model->extend = extend::fromMap($map['extend']);
        }

        if (isset($map['processor'])) {
            $model->processor = processor::fromMap($map['processor']);
        }

        if (isset($map['storage'])) {
            $model->storage = storage::fromMap($map['storage']);
        }

        if (isset($map['swift'])) {
            $model->swift = swift::fromMap($map['swift']);
        }

        return $model;
    }
}
