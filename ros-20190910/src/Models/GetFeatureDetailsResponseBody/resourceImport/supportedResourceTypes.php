<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceImport;

use AlibabaCloud\Tea\Model;

class supportedResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $resourceIdentifiers;

    /**
     * @example ALIYUN::ECS::Disk
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceIdentifiers' => 'ResourceIdentifiers',
        'resourceType'        => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIdentifiers) {
            $res['ResourceIdentifiers'] = $this->resourceIdentifiers;
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
        if (isset($map['ResourceIdentifiers'])) {
            if (!empty($map['ResourceIdentifiers'])) {
                $model->resourceIdentifiers = $map['ResourceIdentifiers'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
