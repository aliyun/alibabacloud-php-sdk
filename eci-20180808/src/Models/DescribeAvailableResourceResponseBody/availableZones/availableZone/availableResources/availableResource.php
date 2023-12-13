<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @description The information about the resources that are available in the zones.
     *
     * @var supportedResources
     */
    public $supportedResources;

    /**
     * @description The type of the resource. Valid values:
     *
     *   InstanceTypeFamily: instance families.
     *   InstanceType: instance types.
     *
     * @example InstanceTypeFamily
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
