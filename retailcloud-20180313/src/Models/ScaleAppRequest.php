<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ScaleAppRequest extends Model
{
    /**
     * @var int
     */
    public $envId;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var int
     */
    public $totalPartitions;
    protected $_name = [
        'envId'           => 'EnvId',
        'replicas'        => 'Replicas',
        'totalPartitions' => 'TotalPartitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->totalPartitions) {
            $res['TotalPartitions'] = $this->totalPartitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['TotalPartitions'])) {
            $model->totalPartitions = $map['TotalPartitions'];
        }

        return $model;
    }
}
