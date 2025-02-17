<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource\conditions\condition;

class conditions extends Model
{
    /**
     * @var condition[]
     */
    public $condition;
    protected $_name = [
        'condition' => 'Condition',
    ];

    public function validate()
    {
        if (\is_array($this->condition)) {
            Model::validateArray($this->condition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            if (\is_array($this->condition)) {
                $res['Condition'] = [];
                $n1               = 0;
                foreach ($this->condition as $item1) {
                    $res['Condition'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n1               = 0;
                foreach ($map['Condition'] as $item1) {
                    $model->condition[$n1++] = condition::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
