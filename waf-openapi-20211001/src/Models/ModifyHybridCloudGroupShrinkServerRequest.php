<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridCloudGroupShrinkServerRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterId;

    /**
     * @description The ID of the node group.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to query the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_elasticity-cn-0xldb****05
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     *
     * @example b1bf3f544f30c1de0b72d91290***bbbb
     *
     * @var string
     */
    public $mids;

    /**
     * @description The region of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: Outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm2th****v6ay
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
        'mids' => 'Mids',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mids) {
            $res['Mids'] = $this->mids;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridCloudGroupShrinkServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mids'])) {
            $model->mids = $map['Mids'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
