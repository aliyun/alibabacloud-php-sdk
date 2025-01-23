<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolRequest\tag;

class CreateIpamPoolRequest extends Model
{
    /**
     * @var int
     */
    public $allocationDefaultCidrMask;
    /**
     * @var int
     */
    public $allocationMaxCidrMask;
    /**
     * @var int
     */
    public $allocationMinCidrMask;
    /**
     * @var bool
     */
    public $autoImport;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $ipVersion;
    /**
     * @var string
     */
    public $ipamPoolDescription;
    /**
     * @var string
     */
    public $ipamPoolName;
    /**
     * @var string
     */
    public $ipamScopeId;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $poolRegionId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $sourceIpamPoolId;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'allocationDefaultCidrMask' => 'AllocationDefaultCidrMask',
        'allocationMaxCidrMask'     => 'AllocationMaxCidrMask',
        'allocationMinCidrMask'     => 'AllocationMinCidrMask',
        'autoImport'                => 'AutoImport',
        'clientToken'               => 'ClientToken',
        'dryRun'                    => 'DryRun',
        'ipVersion'                 => 'IpVersion',
        'ipamPoolDescription'       => 'IpamPoolDescription',
        'ipamPoolName'              => 'IpamPoolName',
        'ipamScopeId'               => 'IpamScopeId',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'poolRegionId'              => 'PoolRegionId',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'sourceIpamPoolId'          => 'SourceIpamPoolId',
        'tag'                       => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationDefaultCidrMask) {
            $res['AllocationDefaultCidrMask'] = $this->allocationDefaultCidrMask;
        }

        if (null !== $this->allocationMaxCidrMask) {
            $res['AllocationMaxCidrMask'] = $this->allocationMaxCidrMask;
        }

        if (null !== $this->allocationMinCidrMask) {
            $res['AllocationMinCidrMask'] = $this->allocationMinCidrMask;
        }

        if (null !== $this->autoImport) {
            $res['AutoImport'] = $this->autoImport;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->ipamPoolDescription) {
            $res['IpamPoolDescription'] = $this->ipamPoolDescription;
        }

        if (null !== $this->ipamPoolName) {
            $res['IpamPoolName'] = $this->ipamPoolName;
        }

        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->poolRegionId) {
            $res['PoolRegionId'] = $this->poolRegionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sourceIpamPoolId) {
            $res['SourceIpamPoolId'] = $this->sourceIpamPoolId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AllocationDefaultCidrMask'])) {
            $model->allocationDefaultCidrMask = $map['AllocationDefaultCidrMask'];
        }

        if (isset($map['AllocationMaxCidrMask'])) {
            $model->allocationMaxCidrMask = $map['AllocationMaxCidrMask'];
        }

        if (isset($map['AllocationMinCidrMask'])) {
            $model->allocationMinCidrMask = $map['AllocationMinCidrMask'];
        }

        if (isset($map['AutoImport'])) {
            $model->autoImport = $map['AutoImport'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IpamPoolDescription'])) {
            $model->ipamPoolDescription = $map['IpamPoolDescription'];
        }

        if (isset($map['IpamPoolName'])) {
            $model->ipamPoolName = $map['IpamPoolName'];
        }

        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PoolRegionId'])) {
            $model->poolRegionId = $map['PoolRegionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SourceIpamPoolId'])) {
            $model->sourceIpamPoolId = $map['SourceIpamPoolId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
