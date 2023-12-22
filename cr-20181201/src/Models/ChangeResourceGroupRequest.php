<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekz5nlvlaksnvi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Id of the request
     *
     * @example cri-8qong6ve5p3mhlgt
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The region ID of the resource group.
     *
     * @example cn-shenzhen-finance-1
     *
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'resourceGroupId'  => 'ResourceGroupId',
        'resourceId'       => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        return $model;
    }
}
