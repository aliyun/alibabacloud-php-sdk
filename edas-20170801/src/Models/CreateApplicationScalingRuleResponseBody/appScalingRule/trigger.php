<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\trigger\triggers;

class trigger extends Model
{
    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'minReplicas' => 'MinReplicas',
        'triggers' => 'Triggers',
    ];

    public function validate()
    {
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['Triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['Triggers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }

        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['Triggers'] as $item1) {
                    $model->triggers[$n1] = triggers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
