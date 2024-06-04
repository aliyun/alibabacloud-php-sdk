<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridCloudGroupsRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * @example 428
     *
     * @var int
     */
    public $clusterId;

    /**
     * @description The type of proxy cluster that is used. Valid values:
     *
     *   **service**: service-based traffic mirroring.
     *   **cname**: reverse proxy.
     *
     * @example cname
     *
     * @var string
     */
    public $clusterProxyType;

    /**
     * @description The name of the node group that you want to query.
     *
     * @example groupName1
     *
     * @var int
     */
    public $groupName;

    /**
     * @description The type of the node group. Valid values:
     *
     *   **protect**
     *   **control**
     *   **storage**
     *   **controlStorage**
     *
     * @example protect
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-********w0b
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the WAF instance. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'clusterId'                      => 'ClusterId',
        'clusterProxyType'               => 'ClusterProxyType',
        'groupName'                      => 'GroupName',
        'groupType'                      => 'GroupType',
        'instanceId'                     => 'InstanceId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterProxyType) {
            $res['ClusterProxyType'] = $this->clusterProxyType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeHybridCloudGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterProxyType'])) {
            $model->clusterProxyType = $map['ClusterProxyType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
