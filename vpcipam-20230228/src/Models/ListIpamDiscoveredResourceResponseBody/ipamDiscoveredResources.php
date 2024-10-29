<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody;

use AlibabaCloud\Tea\Model;

class ipamDiscoveredResources extends Model
{
    /**
     * @example 132193271328****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 192.168.1.0/32
     *
     * @var string
     */
    public $cidr;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $discoveryTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $ipUsage;

    /**
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @example vpc-uf611fp465c7dyb4z****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 132193271328****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $sourceCidr;

    /**
     * @example vpc-uf611fp465c7dyb4z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid'                  => 'AliUid',
        'cidr'                    => 'Cidr',
        'discoveryTime'           => 'DiscoveryTime',
        'ipUsage'                 => 'IpUsage',
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'resourceId'              => 'ResourceId',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'resourceRegionId'        => 'ResourceRegionId',
        'resourceType'            => 'ResourceType',
        'sourceCidr'              => 'SourceCidr',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

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
