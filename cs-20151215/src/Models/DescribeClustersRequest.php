<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersRequest extends Model
{
    /**
     * @description The cluster type.
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The cluster name based on which the system performs fuzzy searches among the clusters that belong to the current Alibaba Cloud account.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clusterType' => 'clusterType',
        'name' => 'name',
        'resourceGroupId' => 'resource_group_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        return $model;
    }
}
