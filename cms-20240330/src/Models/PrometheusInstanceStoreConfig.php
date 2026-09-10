<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class PrometheusInstanceStoreConfig extends Model
{
    /**
     * @var int
     */
    public $parallelCountPerHost;

    /**
     * @var bool
     */
    public $parallelEnable;

    /**
     * @var string
     */
    public $parallelMode;

    /**
     * @var bool
     */
    public $queryCacheEnable;

    /**
     * @var int
     */
    public $totalParallelCount;
    protected $_name = [
        'parallelCountPerHost' => 'parallelCountPerHost',
        'parallelEnable' => 'parallelEnable',
        'parallelMode' => 'parallelMode',
        'queryCacheEnable' => 'queryCacheEnable',
        'totalParallelCount' => 'totalParallelCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parallelCountPerHost) {
            $res['parallelCountPerHost'] = $this->parallelCountPerHost;
        }

        if (null !== $this->parallelEnable) {
            $res['parallelEnable'] = $this->parallelEnable;
        }

        if (null !== $this->parallelMode) {
            $res['parallelMode'] = $this->parallelMode;
        }

        if (null !== $this->queryCacheEnable) {
            $res['queryCacheEnable'] = $this->queryCacheEnable;
        }

        if (null !== $this->totalParallelCount) {
            $res['totalParallelCount'] = $this->totalParallelCount;
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
        if (isset($map['parallelCountPerHost'])) {
            $model->parallelCountPerHost = $map['parallelCountPerHost'];
        }

        if (isset($map['parallelEnable'])) {
            $model->parallelEnable = $map['parallelEnable'];
        }

        if (isset($map['parallelMode'])) {
            $model->parallelMode = $map['parallelMode'];
        }

        if (isset($map['queryCacheEnable'])) {
            $model->queryCacheEnable = $map['queryCacheEnable'];
        }

        if (isset($map['totalParallelCount'])) {
            $model->totalParallelCount = $map['totalParallelCount'];
        }

        return $model;
    }
}
