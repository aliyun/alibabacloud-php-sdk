<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponseBody\data\specHistory;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The history of automatic bandwidth scaling of ApsaraDB for Redis instances. This feature is not supported.
     *
     * @var mixed[][]
     */
    public $bandwidth;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The history of resource scale-out of ApsaraDB for Redis instances. This feature is not supported.
     *
     * @var mixed[][]
     */
    public $resource;

    /**
     * @description The history of automatic shard scale-out of ApsaraDB for Redis instances. This feature is not supported.
     *
     * @var mixed[][]
     */
    public $shard;

    /**
     * @description The history of automatic performance scaling.
     *
     * @var specHistory[]
     */
    public $specHistory;

    /**
     * @description The history of storage expansion. This feature is not supported.
     *
     * @var mixed[][]
     */
    public $storage;
    protected $_name = [
        'bandwidth'   => 'Bandwidth',
        'instanceId'  => 'InstanceId',
        'resource'    => 'Resource',
        'shard'       => 'Shard',
        'specHistory' => 'SpecHistory',
        'storage'     => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->shard) {
            $res['Shard'] = $this->shard;
        }
        if (null !== $this->specHistory) {
            $res['SpecHistory'] = [];
            if (null !== $this->specHistory && \is_array($this->specHistory)) {
                $n = 0;
                foreach ($this->specHistory as $item) {
                    $res['SpecHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
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
        if (isset($map['Bandwidth'])) {
            if (!empty($map['Bandwidth'])) {
                $model->bandwidth = $map['Bandwidth'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = $map['Resource'];
            }
        }
        if (isset($map['Shard'])) {
            if (!empty($map['Shard'])) {
                $model->shard = $map['Shard'];
            }
        }
        if (isset($map['SpecHistory'])) {
            if (!empty($map['SpecHistory'])) {
                $model->specHistory = [];
                $n                  = 0;
                foreach ($map['SpecHistory'] as $item) {
                    $model->specHistory[$n++] = null !== $item ? specHistory::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Storage'])) {
            if (!empty($map['Storage'])) {
                $model->storage = $map['Storage'];
            }
        }

        return $model;
    }
}
