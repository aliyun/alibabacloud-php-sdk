<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class AssignPrivateIpAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $ipv4Prefix;

    /**
     * @var int
     */
    public $ipv4PrefixCount;

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
     * @var string[]
     */
    public $privateIpAddress;

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
     * @var int
     */
    public $secondaryPrivateIpAddressCount;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'ipv4Prefix' => 'Ipv4Prefix',
        'ipv4PrefixCount' => 'Ipv4PrefixCount',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'privateIpAddress' => 'PrivateIpAddress',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'secondaryPrivateIpAddressCount' => 'SecondaryPrivateIpAddressCount',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4Prefix)) {
            Model::validateArray($this->ipv4Prefix);
        }
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ipv4Prefix) {
            if (\is_array($this->ipv4Prefix)) {
                $res['Ipv4Prefix'] = [];
                $n1 = 0;
                foreach ($this->ipv4Prefix as $item1) {
                    $res['Ipv4Prefix'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv4PrefixCount) {
            $res['Ipv4PrefixCount'] = $this->ipv4PrefixCount;
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

        if (null !== $this->privateIpAddress) {
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1 = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->secondaryPrivateIpAddressCount) {
            $res['SecondaryPrivateIpAddressCount'] = $this->secondaryPrivateIpAddressCount;
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

        if (isset($map['Ipv4Prefix'])) {
            if (!empty($map['Ipv4Prefix'])) {
                $model->ipv4Prefix = [];
                $n1 = 0;
                foreach ($map['Ipv4Prefix'] as $item1) {
                    $model->ipv4Prefix[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv4PrefixCount'])) {
            $model->ipv4PrefixCount = $map['Ipv4PrefixCount'];
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

        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n1 = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1++] = $item1;
                }
            }
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

        if (isset($map['SecondaryPrivateIpAddressCount'])) {
            $model->secondaryPrivateIpAddressCount = $map['SecondaryPrivateIpAddressCount'];
        }

        return $model;
    }
}
