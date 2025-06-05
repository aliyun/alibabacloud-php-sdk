<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateVirtualNodeRequest\tag;

class UpdateVirtualNodeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterDNS;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $customResources;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $virtualNodeId;

    /**
     * @var string
     */
    public $virtualNodeName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'clusterDNS' => 'ClusterDNS',
        'clusterDomain' => 'ClusterDomain',
        'customResources' => 'CustomResources',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
        'virtualNodeId' => 'VirtualNodeId',
        'virtualNodeName' => 'VirtualNodeName',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clusterDNS) {
            $res['ClusterDNS'] = $this->clusterDNS;
        }

        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }

        if (null !== $this->customResources) {
            $res['CustomResources'] = $this->customResources;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->virtualNodeId) {
            $res['VirtualNodeId'] = $this->virtualNodeId;
        }

        if (null !== $this->virtualNodeName) {
            $res['VirtualNodeName'] = $this->virtualNodeName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClusterDNS'])) {
            $model->clusterDNS = $map['ClusterDNS'];
        }

        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }

        if (isset($map['CustomResources'])) {
            $model->customResources = $map['CustomResources'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VirtualNodeId'])) {
            $model->virtualNodeId = $map['VirtualNodeId'];
        }

        if (isset($map['VirtualNodeName'])) {
            $model->virtualNodeName = $map['VirtualNodeName'];
        }

        return $model;
    }
}
