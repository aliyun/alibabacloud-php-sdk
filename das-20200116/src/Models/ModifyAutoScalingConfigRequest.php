<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest\bandwidth;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest\resource;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest\shard;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest\spec;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest\storage;

class ModifyAutoScalingConfigRequest extends Model
{
    /**
     * @var bandwidth
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var shard
     */
    public $shard;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var storage
     */
    public $storage;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'instanceId' => 'InstanceId',
        'resource' => 'Resource',
        'shard' => 'Shard',
        'spec' => 'Spec',
        'storage' => 'Storage',
    ];

    public function validate()
    {
        if (null !== $this->bandwidth) {
            $this->bandwidth->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (null !== $this->shard) {
            $this->shard->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = null !== $this->bandwidth ? $this->bandwidth->toArray($noStream) : $this->bandwidth;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->shard) {
            $res['Shard'] = null !== $this->shard ? $this->shard->toArray($noStream) : $this->shard;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = bandwidth::fromMap($map['Bandwidth']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
