<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes;

use AlibabaCloud\Tea\Model;

class stackOperationRisk extends Model
{
    /**
     * @description The filters that are used to filter resources. Valid values:
     *
     *   RegionId: the ID of the region.
     *   ResourceId: the ID of the resource.
     *   ResourceName: the name of the resource.
     *   Tags: the tags of the resource.
     *   ResourceGroupId: the ID of the resource group.
     *   DeletionProtection: the deletion protection feature.
     *
     * @var string[]
     */
    public $deleteStack;
    protected $_name = [
        'deleteStack' => 'DeleteStack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteStack) {
            $res['DeleteStack'] = $this->deleteStack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackOperationRisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteStack'])) {
            if (!empty($map['DeleteStack'])) {
                $model->deleteStack = $map['DeleteStack'];
            }
        }

        return $model;
    }
}
