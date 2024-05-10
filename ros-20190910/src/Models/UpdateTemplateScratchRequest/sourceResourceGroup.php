<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\UpdateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class sourceResourceGroup extends Model
{
    /**
     * @description The ID of the source resource group.
     *
     * This parameter is required.
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource types.
     *
     * @var string[]
     */
    public $resourceTypeFilter;
    protected $_name = [
        'resourceGroupId'    => 'ResourceGroupId',
        'resourceTypeFilter' => 'ResourceTypeFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceTypeFilter) {
            $res['ResourceTypeFilter'] = $this->resourceTypeFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceResourceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceTypeFilter'])) {
            if (!empty($map['ResourceTypeFilter'])) {
                $model->resourceTypeFilter = $map['ResourceTypeFilter'];
            }
        }

        return $model;
    }
}
