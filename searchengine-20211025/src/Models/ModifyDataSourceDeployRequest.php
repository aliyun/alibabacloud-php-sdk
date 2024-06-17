<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\extend;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\processor;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\storage;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\swift;
use AlibabaCloud\Tea\Model;

class ModifyDataSourceDeployRequest extends Model
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

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description generationId
     *
     * @example 1708674867
     *
     * @var int
     */
    public $generationId;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'extend'         => 'extend',
        'processor'      => 'processor',
        'storage'        => 'storage',
        'swift'          => 'swift',
        'dryRun'         => 'dryRun',
        'generationId'   => 'generationId',
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
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->generationId) {
            $res['generationId'] = $this->generationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataSourceDeployRequest
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
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['generationId'])) {
            $model->generationId = $map['generationId'];
        }

        return $model;
    }
}
