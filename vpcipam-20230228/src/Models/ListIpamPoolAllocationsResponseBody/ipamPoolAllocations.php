<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsResponseBody;

use AlibabaCloud\Tea\Model;

class ipamPoolAllocations extends Model
{
    /**
     * @description The allocated CIDR block.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the instance was created.
     *
     * @example 2023-05-19T08:59:18Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the allocation.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamPoolAllocationDescription;

    /**
     * @description The ID of the instance to which CIDR blocks are allocated from the IPAM pool.
     *
     * @example ipam-pool-alloc-112za33e4****
     *
     * @var string
     */
    public $ipamPoolAllocationId;

    /**
     * @description The name of the allocation.
     *
     * @example test name
     *
     * @var string
     */
    public $ipamPoolAllocationName;

    /**
     * @description The ID of the IPAM pool.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource to which the CIDR block is allocated.
     *
     * @example vpc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The effective region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource to which the CIDR block is allocated. Valid values:
     *
     *   **VPC**
     *   **IpamPool**
     *   **Custom**
     *
     * @example Custom
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The source CIDR block.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **Created**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cidr' => 'Cidr',
        'creationTime' => 'CreationTime',
        'ipamPoolAllocationDescription' => 'IpamPoolAllocationDescription',
        'ipamPoolAllocationId' => 'IpamPoolAllocationId',
        'ipamPoolAllocationName' => 'IpamPoolAllocationName',
        'ipamPoolId' => 'IpamPoolId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
        'sourceCidr' => 'SourceCidr',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ipamPoolAllocationDescription) {
            $res['IpamPoolAllocationDescription'] = $this->ipamPoolAllocationDescription;
        }
        if (null !== $this->ipamPoolAllocationId) {
            $res['IpamPoolAllocationId'] = $this->ipamPoolAllocationId;
        }
        if (null !== $this->ipamPoolAllocationName) {
            $res['IpamPoolAllocationName'] = $this->ipamPoolAllocationName;
        }
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamPoolAllocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IpamPoolAllocationDescription'])) {
            $model->ipamPoolAllocationDescription = $map['IpamPoolAllocationDescription'];
        }
        if (isset($map['IpamPoolAllocationId'])) {
            $model->ipamPoolAllocationId = $map['IpamPoolAllocationId'];
        }
        if (isset($map['IpamPoolAllocationName'])) {
            $model->ipamPoolAllocationName = $map['IpamPoolAllocationName'];
        }
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
