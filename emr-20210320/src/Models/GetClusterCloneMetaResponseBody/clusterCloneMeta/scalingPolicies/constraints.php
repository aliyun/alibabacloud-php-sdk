<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies;

use AlibabaCloud\Tea\Model;

class constraints extends Model
{
    /**
     * @description The maximum number of nodes in the node group. Default value: 2000.
     *
     * @example 200
     *
     * @var int
     */
    public $maxCapacity;

    /**
     * @description The maximum number of nodes that you can configure based on your business requirements.
     *
     * @var int
     */
    public $maxOnDemandCapacity;

    /**
     * @description The minimum number of nodes in the node group. Default value: 0.
     *
     * @example 50
     *
     * @var int
     */
    public $minCapacity;
    protected $_name = [
        'maxCapacity'         => 'MaxCapacity',
        'maxOnDemandCapacity' => 'MaxOnDemandCapacity',
        'minCapacity'         => 'MinCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->maxOnDemandCapacity) {
            $res['MaxOnDemandCapacity'] = $this->maxOnDemandCapacity;
        }
        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return constraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }
        if (isset($map['MaxOnDemandCapacity'])) {
            $model->maxOnDemandCapacity = $map['MaxOnDemandCapacity'];
        }
        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        return $model;
    }
}
