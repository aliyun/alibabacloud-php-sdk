<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\templateParameterConstraints;

use AlibabaCloud\Tea\Model;

class supportedResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $properties;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'properties'   => 'Properties',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = $map['Properties'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
