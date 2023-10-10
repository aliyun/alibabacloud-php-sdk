<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListClusterRequest extends Model
{
    /**
     * @description The ID of the namespace. You can call the ListUserDefineRegion operation to query the namespace ID. For more information, see [ListUserDefineRegion](~~149377~~).
     *
     *   If this parameter is left empty, the clusters in the default namespace are queried.
     *   If this parameter is specified, the clusters in the specified namespace are queried.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The ID of the resource group. You can call the ListResourceGroup operation to query the resource group ID. For more information, see [ListResourceGroup](~~62055~~).
     *
     *   If this parameter is left empty, the clusters in the default resource group are queried.
     *   If this parameter is specified, the clusters in the specified resource group are queried.
     *
     * @example 461
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
