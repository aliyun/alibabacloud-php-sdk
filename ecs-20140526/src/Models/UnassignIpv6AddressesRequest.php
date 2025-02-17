<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class UnassignIpv6AddressesRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipv6Address;
    /**
     * @var string[]
     */
    public $ipv6Prefix;
    /**
     * @var string
     */
    public $networkInterfaceId;
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
    protected $_name = [
        'ipv6Address'          => 'Ipv6Address',
        'ipv6Prefix'           => 'Ipv6Prefix',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        if (\is_array($this->ipv6Prefix)) {
            Model::validateArray($this->ipv6Prefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            if (\is_array($this->ipv6Address)) {
                $res['Ipv6Address'] = [];
                $n1                 = 0;
                foreach ($this->ipv6Address as $item1) {
                    $res['Ipv6Address'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv6Prefix) {
            if (\is_array($this->ipv6Prefix)) {
                $res['Ipv6Prefix'] = [];
                $n1                = 0;
                foreach ($this->ipv6Prefix as $item1) {
                    $res['Ipv6Prefix'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n1                 = 0;
                foreach ($map['Ipv6Address'] as $item1) {
                    $model->ipv6Address[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv6Prefix'])) {
            if (!empty($map['Ipv6Prefix'])) {
                $model->ipv6Prefix = [];
                $n1                = 0;
                foreach ($map['Ipv6Prefix'] as $item1) {
                    $model->ipv6Prefix[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
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

        return $model;
    }
}
