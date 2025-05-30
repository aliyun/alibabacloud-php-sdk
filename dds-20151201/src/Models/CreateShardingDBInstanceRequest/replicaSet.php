<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;

use AlibabaCloud\Dara\Model;

class replicaSet extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $readonlyReplicas;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'class' => 'Class',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'storage' => 'Storage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
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
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
