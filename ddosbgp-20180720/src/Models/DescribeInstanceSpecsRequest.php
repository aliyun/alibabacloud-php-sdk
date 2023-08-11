<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecsRequest extends Model
{
    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin Enterprise instance belongs in Resource Management. This parameter is empty by default, which indicates that the Anti-DDoS Origin Enterprise instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example ["ddosbgp-cn-n6w1r7nz****"]
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @description The normal clean bandwidth. Unit: Mbit/s.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the unlimited protection feature is enabled. Valid values:
     *
     *   **0**: The unlimited protection feature is disabled.
     *   **1**: The unlimited protection feature is enabled.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'instanceIdList'  => 'InstanceIdList',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSpecsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
