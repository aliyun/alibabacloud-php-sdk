<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource;
use AlibabaCloud\Tea\Model;

class conditionSupportedResources extends Model
{
    /**
     * @var conditionSupportedResource[]
     */
    public $conditionSupportedResource;
    protected $_name = [
        'conditionSupportedResource' => 'ConditionSupportedResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionSupportedResource) {
            $res['ConditionSupportedResource'] = [];
            if (null !== $this->conditionSupportedResource && \is_array($this->conditionSupportedResource)) {
                $n = 0;
                foreach ($this->conditionSupportedResource as $item) {
                    $res['ConditionSupportedResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionSupportedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionSupportedResource'])) {
            if (!empty($map['ConditionSupportedResource'])) {
                $model->conditionSupportedResource = [];
                $n                                 = 0;
                foreach ($map['ConditionSupportedResource'] as $item) {
                    $model->conditionSupportedResource[$n++] = null !== $item ? conditionSupportedResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
