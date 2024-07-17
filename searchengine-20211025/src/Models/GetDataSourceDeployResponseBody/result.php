<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\processor;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\storage;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\swift;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @var extend
     */
    public $extend;

    /**
     * @description The parameters of the process.
     *
     * @var processor
     */
    public $processor;

    /**
     * @description The information about the data source.
     *
     * @var storage
     */
    public $storage;

    /**
     * @description The information about the incremental data source Swift.
     *
     * @var swift
     */
    public $swift;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'extend'         => 'extend',
        'processor'      => 'processor',
        'storage'        => 'storage',
        'swift'          => 'swift',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }
        if (null !== $this->extend) {
            $res['extend'] = null !== $this->extend ? $this->extend->toMap() : null;
        }
        if (null !== $this->processor) {
            $res['processor'] = null !== $this->processor ? $this->processor->toMap() : null;
        }
        if (null !== $this->storage) {
            $res['storage'] = null !== $this->storage ? $this->storage->toMap() : null;
        }
        if (null !== $this->swift) {
            $res['swift'] = null !== $this->swift ? $this->swift->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
