<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Tea\Model;

class runtimeResource extends Model
{
    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The resource group ID.
     *
     * @example S_resgrop_xxx
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'resourceGroup' => 'ResourceGroup',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
