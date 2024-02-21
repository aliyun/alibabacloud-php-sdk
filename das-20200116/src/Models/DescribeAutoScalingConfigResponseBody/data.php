<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data\bandwidth;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data\resource;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data\shard;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data\spec;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data\storage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The configurations of the automatic bandwidth adjustment feature.
     *
     * @var bandwidth
     */
    public $bandwidth;

    /**
     * @description The configurations of the auto scaling feature for local resources.
     *
     * @var resource
     */
    public $resource;

    /**
     * @description The configurations of the auto scaling feature for shards.
     *
     * @var shard
     */
    public $shard;

    /**
     * @description The configurations of the auto scaling feature for specifications.
     *
     * @var spec
     */
    public $spec;

    /**
     * @description The configurations of the automatic storage expansion feature.
     *
     * @var storage
     */
    public $storage;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'resource'  => 'Resource',
        'shard'     => 'Shard',
        'spec'      => 'Spec',
        'storage'   => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = null !== $this->bandwidth ? $this->bandwidth->toMap() : null;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->shard) {
            $res['Shard'] = null !== $this->shard ? $this->shard->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toMap() : null;
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
            $model->bandwidth = bandwidth::fromMap($map['Bandwidth']);
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['Shard'])) {
            $model->shard = shard::fromMap($map['Shard']);
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['Storage'])) {
            $model->storage = storage::fromMap($map['Storage']);
        }

        return $model;
    }
}
