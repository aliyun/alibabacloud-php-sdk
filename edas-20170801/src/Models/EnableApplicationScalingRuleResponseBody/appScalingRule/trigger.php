<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule;

use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule\trigger\triggers;
use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description The maximum number of replicas. The upper limit is 1000.
     *
     * @example 122
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description The minimum number of replicas. The lower limit is 0.
     *
     * @example 1
     *
     * @var int
     */
    public $minReplicas;

    /**
     * @description The list of triggers.
     *
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'minReplicas' => 'MinReplicas',
        'triggers'    => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['Triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['Triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
