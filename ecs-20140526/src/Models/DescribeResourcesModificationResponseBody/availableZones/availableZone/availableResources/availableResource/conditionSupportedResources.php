<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource;

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
        if (\is_array($this->conditionSupportedResource)) {
            Model::validateArray($this->conditionSupportedResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionSupportedResource) {
            if (\is_array($this->conditionSupportedResource)) {
                $res['ConditionSupportedResource'] = [];
                $n1 = 0;
                foreach ($this->conditionSupportedResource as $item1) {
                    $res['ConditionSupportedResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConditionSupportedResource'])) {
            if (!empty($map['ConditionSupportedResource'])) {
                $model->conditionSupportedResource = [];
                $n1 = 0;
                foreach ($map['ConditionSupportedResource'] as $item1) {
                    $model->conditionSupportedResource[$n1++] = conditionSupportedResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
