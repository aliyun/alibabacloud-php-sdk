<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesRequest\tags;

class ListIpamScopesRequest extends Model
{
    /**
     * @var string
     */
    public $ipamId;
    /**
     * @var string[]
     */
    public $ipamScopeIds;
    /**
     * @var string
     */
    public $ipamScopeName;
    /**
     * @var string
     */
    public $ipamScopeType;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
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
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'ipamId'               => 'IpamId',
        'ipamScopeIds'         => 'IpamScopeIds',
        'ipamScopeName'        => 'IpamScopeName',
        'ipamScopeType'        => 'IpamScopeType',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->ipamScopeIds)) {
            Model::validateArray($this->ipamScopeIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }

        if (null !== $this->ipamScopeIds) {
            if (\is_array($this->ipamScopeIds)) {
                $res['IpamScopeIds'] = [];
                $n1                  = 0;
                foreach ($this->ipamScopeIds as $item1) {
                    $res['IpamScopeIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipamScopeName) {
            $res['IpamScopeName'] = $this->ipamScopeName;
        }

        if (null !== $this->ipamScopeType) {
            $res['IpamScopeType'] = $this->ipamScopeType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }

        if (isset($map['IpamScopeIds'])) {
            if (!empty($map['IpamScopeIds'])) {
                $model->ipamScopeIds = [];
                $n1                  = 0;
                foreach ($map['IpamScopeIds'] as $item1) {
                    $model->ipamScopeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IpamScopeName'])) {
            $model->ipamScopeName = $map['IpamScopeName'];
        }

        if (isset($map['IpamScopeType'])) {
            $model->ipamScopeType = $map['IpamScopeType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
