<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @description The information about the resources.
     *
     * @var supportedResources
     */
    public $supportedResources;

    /**
     * @description The resource type. Valid values:
     *
     *   Zone: zone
     *   IoOptimized: I/O optimized resource
     *   InstanceType: instance type
     *   SystemDisk: system disk
     *   DataDisk: data disk
     *   Network: network type
     *   ddh: dedicated host
     *
     * @example InstanceType
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'supportedResources' => 'SupportedResources',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['SupportedResources'])) {
            $model->supportedResources = supportedResources::fromMap($map['SupportedResources']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
