<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody\ipamDiscoveredResources\ipCountDetail;

class ipamDiscoveredResources extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $discoveryTime;

    /**
     * @var ipCountDetail
     */
    public $ipCountDetail;

    /**
     * @var string
     */
    public $ipUsage;

    /**
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sourceCidr;

    /**
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

    public function validate()
    {
        if (null !== $this->ipCountDetail) {
            $this->ipCountDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['IpCountDetail'] = null !== $this->ipCountDetail ? $this->ipCountDetail->toArray($noStream) : $this->ipCountDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
