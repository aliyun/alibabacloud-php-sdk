<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseClassSetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $cacheStorageStep;

    /**
     * @example 16
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @example 32000
     *
     * @var int
     */
    public $maxCacheStorage;

    /**
     * @example 64
     *
     * @var int
     */
    public $memoryGiB;

    /**
     * @example 200
     *
     * @var int
     */
    public $minCacheStorage;

    /**
     * @example n1.2xlarge
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cacheStorageStep' => 'CacheStorageStep',
        'cpuCores'         => 'CpuCores',
        'maxCacheStorage'  => 'MaxCacheStorage',
        'memoryGiB'        => 'MemoryGiB',
        'minCacheStorage'  => 'MinCacheStorage',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheStorageStep) {
            $res['CacheStorageStep'] = $this->cacheStorageStep;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->maxCacheStorage) {
            $res['MaxCacheStorage'] = $this->maxCacheStorage;
        }
        if (null !== $this->memoryGiB) {
            $res['MemoryGiB'] = $this->memoryGiB;
        }
        if (null !== $this->minCacheStorage) {
            $res['MinCacheStorage'] = $this->minCacheStorage;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheStorageStep'])) {
            $model->cacheStorageStep = $map['CacheStorageStep'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['MaxCacheStorage'])) {
            $model->maxCacheStorage = $map['MaxCacheStorage'];
        }
        if (isset($map['MemoryGiB'])) {
            $model->memoryGiB = $map['MemoryGiB'];
        }
        if (isset($map['MinCacheStorage'])) {
            $model->minCacheStorage = $map['MinCacheStorage'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
