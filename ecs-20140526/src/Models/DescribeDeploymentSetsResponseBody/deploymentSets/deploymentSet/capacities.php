<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet\capacities\capacity;

class capacities extends Model
{
    /**
     * @var capacity[]
     */
    public $capacity;
    protected $_name = [
        'capacity' => 'Capacity',
    ];

    public function validate()
    {
        if (\is_array($this->capacity)) {
            Model::validateArray($this->capacity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            if (\is_array($this->capacity)) {
                $res['Capacity'] = [];
                $n1              = 0;
                foreach ($this->capacity as $item1) {
                    $res['Capacity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Capacity'])) {
            if (!empty($map['Capacity'])) {
                $model->capacity = [];
                $n1              = 0;
                foreach ($map['Capacity'] as $item1) {
                    $model->capacity[$n1++] = capacity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
