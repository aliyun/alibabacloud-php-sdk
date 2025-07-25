<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody\ipamDiscoveredResources\ipCountDetail;
use AlibabaCloud\Tea\Model;

class ipamDiscoveredResources extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 132193271328****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The CIDR block of the resource.
     *
     * @example 192.168.1.0/32
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the resource was discovered.
     *
     * >  If the resource has not been modified since it was created, the discovery time remains unchanged.
     *
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $discoveryTime;

    /**
     * @var ipCountDetail
     */
    public $ipCountDetail;

    /**
     * @description The IP usage in decimal form.
     *
     * @example 0
     *
     * @var string
     */
    public $ipUsage;

    /**
     * @description The ID of resource discovery instance.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @description The ID of the resource.
     *
     * @example vpc-uf611fp465c7dyb4z****
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
     * @description The ID of the region to which the resource belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The resource type. Valid values:
     *
     *   **VPC**
     *   **VSwitch**
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The source CIDR block.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @description The ID of the VPC to which the resource belongs.
     *
     * @example vpc-uf611fp465c7dyb4z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'cidr' => 'Cidr',
        'discoveryTime' => 'DiscoveryTime',
        'ipCountDetail' => 'IpCountDetail',
        'ipUsage' => 'IpUsage',
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
        'sourceCidr' => 'SourceCidr',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->discoveryTime) {
            $res['DiscoveryTime'] = $this->discoveryTime;
        }
        if (null !== $this->ipCountDetail) {
            $res['IpCountDetail'] = null !== $this->ipCountDetail ? $this->ipCountDetail->toMap() : null;
        }
        if (null !== $this->ipUsage) {
            $res['IpUsage'] = $this->ipUsage;
        }
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamDiscoveredResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['DiscoveryTime'])) {
            $model->discoveryTime = $map['DiscoveryTime'];
        }
        if (isset($map['IpCountDetail'])) {
            $model->ipCountDetail = ipCountDetail::fromMap($map['IpCountDetail']);
        }
        if (isset($map['IpUsage'])) {
            $model->ipUsage = $map['IpUsage'];
        }
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
