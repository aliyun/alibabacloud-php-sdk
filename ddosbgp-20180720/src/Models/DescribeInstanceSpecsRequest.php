<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecsRequest extends Model
{
    /**
     * @description The ID of the Anti-DDoS Origin Enterprise instance. This parameter value is a string consisting of JSON arrays. Each element in a JSON array indicates an instance ID. If you want to query more than one instance, separate instance IDs with commas (,).
     *
     * This parameter is required.
     * @example ["ddosbgp-cn-n6w1r7nz****"]
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @description The region ID of the Anti-DDoS Origin Enterprise instance. Default value: **cn-hangzhou**, which indicates the China (Hangzhou) region.
     *
     * >  If your instance does not reside in the China (Hangzhou) region, you must specify this parameter to the region ID of your instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the regions of cloud assets that are supported by an Anti-DDoS Origin instance.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin Enterprise instance belongs in Resource Management. This parameter is empty by default, which indicates that the Anti-DDoS Origin Enterprise instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](https://help.aliyun.com/document_detail/94485.html).
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
