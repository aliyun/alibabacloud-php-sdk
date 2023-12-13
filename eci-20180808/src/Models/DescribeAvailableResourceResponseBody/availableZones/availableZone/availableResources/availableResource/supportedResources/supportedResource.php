<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;

use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @description The category of resources based on stock status. Valid values:
     *
     *   WithStock: Resources are in sufficient stock.
     *   ClosedWithStock: Resources are insufficient. We recommend that you use instance types that are in sufficient stock.
     *   WithoutStock: Resources are sold out and will be replenished. We recommend that you use instance types that are in sufficient stock.
     *   ClosedWithoutStock: Resources are sold out and will not be replenished. We recommend that you use instance types that are in sufficient stock.
     *
     * @example WithStock
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description The ECS instance types or instance families that are available in the zones.
     *
     *   If the return value of the Type parameter is InstanceTypeFamily, this parameter indicates instance families that are returned.
     *   If the return value of the Type parameter is InstanceType, this parameter indicates instance types that are returned.
     *
     * @example ecs.c6
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'statusCategory' => 'StatusCategory',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
