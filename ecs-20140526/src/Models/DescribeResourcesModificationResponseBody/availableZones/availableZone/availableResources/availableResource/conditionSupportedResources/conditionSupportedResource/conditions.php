<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource\conditions\condition;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = [];
            if (null !== $this->condition && \is_array($this->condition)) {
                $n = 0;
                foreach ($this->condition as $item) {
                    $res['Condition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n                = 0;
                foreach ($map['Condition'] as $item) {
                    $model->condition[$n++] = null !== $item ? condition::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
