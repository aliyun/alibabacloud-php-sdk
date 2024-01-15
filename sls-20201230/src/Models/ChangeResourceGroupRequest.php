<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2i7nhaxifxey
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource.
     *
     * @example ali-test-project
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Only PROJECT is supported. Set the value to PROJECT.
     *
     * @example PROJECT
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceGroupId' => 'resourceGroupId',
        'resourceId'      => 'resourceId',
        'resourceType'    => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
