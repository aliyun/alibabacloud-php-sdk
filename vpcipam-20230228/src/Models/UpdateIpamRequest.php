<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class UpdateIpamRequest extends Model
{
    /**
     * @var string[]
     */
    public $addOperatingRegion;

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
    public $ipamDescription;

    /**
     * @var string
     */
    public $ipamId;

    /**
     * @var string
     */
    public $ipamName;

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
     * @var string[]
     */
    public $removeOperatingRegion;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addOperatingRegion' => 'AddOperatingRegion',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipamDescription' => 'IpamDescription',
        'ipamId' => 'IpamId',
        'ipamName' => 'IpamName',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeOperatingRegion' => 'RemoveOperatingRegion',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->addOperatingRegion)) {
            Model::validateArray($this->addOperatingRegion);
        }
        if (\is_array($this->removeOperatingRegion)) {
            Model::validateArray($this->removeOperatingRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addOperatingRegion) {
            if (\is_array($this->addOperatingRegion)) {
                $res['AddOperatingRegion'] = [];
                $n1 = 0;
                foreach ($this->addOperatingRegion as $item1) {
                    $res['AddOperatingRegion'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ipamDescription) {
            $res['IpamDescription'] = $this->ipamDescription;
        }

        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }

        if (null !== $this->ipamName) {
            $res['IpamName'] = $this->ipamName;
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

        if (null !== $this->removeOperatingRegion) {
            if (\is_array($this->removeOperatingRegion)) {
                $res['RemoveOperatingRegion'] = [];
                $n1 = 0;
                foreach ($this->removeOperatingRegion as $item1) {
                    $res['RemoveOperatingRegion'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddOperatingRegion'])) {
            if (!empty($map['AddOperatingRegion'])) {
                $model->addOperatingRegion = [];
                $n1 = 0;
                foreach ($map['AddOperatingRegion'] as $item1) {
                    $model->addOperatingRegion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['IpamDescription'])) {
            $model->ipamDescription = $map['IpamDescription'];
        }

        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }

        if (isset($map['IpamName'])) {
            $model->ipamName = $map['IpamName'];
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

        if (isset($map['RemoveOperatingRegion'])) {
            if (!empty($map['RemoveOperatingRegion'])) {
                $model->removeOperatingRegion = [];
                $n1 = 0;
                foreach ($map['RemoveOperatingRegion'] as $item1) {
                    $model->removeOperatingRegion[$n1] = $item1;
                    ++$n1;
                }
            }
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
