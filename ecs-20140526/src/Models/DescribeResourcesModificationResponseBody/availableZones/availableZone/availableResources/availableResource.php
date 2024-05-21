<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @description The resource types that resources can be changed to after the resources meet specified conditions. If the conditions are met, you can change the current resource to a resource in the list.
     *
     * @var conditionSupportedResources
     */
    public $conditionSupportedResources;

    /**
     * @description The information about the resources.
     *
     * @var supportedResources
     */
    public $supportedResources;

    /**
     * @description The type of the resources. Valid values:
     *
     *   Zone
     *   IoOptimized
     *   InstanceType
     *   SystemDisk
     *   DataDisk
     *   Network
     *
     * @example InstanceType
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'conditionSupportedResources' => 'ConditionSupportedResources',
        'supportedResources'          => 'SupportedResources',
        'type'                        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionSupportedResources) {
            $res['ConditionSupportedResources'] = null !== $this->conditionSupportedResources ? $this->conditionSupportedResources->toMap() : null;
        }
        if (null !== $this->supportedResources) {
            $res['SupportedResources'] = null !== $this->supportedResources ? $this->supportedResources->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionSupportedResources'])) {
            $model->conditionSupportedResources = conditionSupportedResources::fromMap($map['ConditionSupportedResources']);
        }
        if (isset($map['SupportedResources'])) {
            $model->supportedResources = supportedResources::fromMap($map['SupportedResources']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
