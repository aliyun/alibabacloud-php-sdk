<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceEndpointResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class realServer extends Model
{
    /**
     * @var bool
     */
    public $activated;

    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $replicaId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'activated' => 'Activated',
        'class' => 'Class',
        'ip' => 'Ip',
        'port' => 'Port',
        'replicaId' => 'ReplicaId',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activated) {
            $res['Activated'] = $this->activated;
        }

        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->replicaId) {
            $res['ReplicaId'] = $this->replicaId;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Activated'])) {
            $model->activated = $map['Activated'];
        }

        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ReplicaId'])) {
            $model->replicaId = $map['ReplicaId'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
