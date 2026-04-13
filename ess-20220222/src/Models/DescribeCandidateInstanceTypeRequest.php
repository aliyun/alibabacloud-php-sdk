<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeCandidateInstanceTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $allowCrossAz;

    /**
     * @var bool
     */
    public $allowDifferentGeneration;

    /**
     * @var string[]
     */
    public $dataDiskCategories;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var float
     */
    public $maxPrice;

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
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'allowCrossAz' => 'AllowCrossAz',
        'allowDifferentGeneration' => 'AllowDifferentGeneration',
        'dataDiskCategories' => 'DataDiskCategories',
        'imageFamily' => 'ImageFamily',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'instanceTypes' => 'InstanceTypes',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'maxPrice' => 'MaxPrice',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'spotStrategy' => 'SpotStrategy',
        'systemDiskCategories' => 'SystemDiskCategories',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiskCategories)) {
            Model::validateArray($this->dataDiskCategories);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (\is_array($this->systemDiskCategories)) {
            Model::validateArray($this->systemDiskCategories);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCrossAz) {
            $res['AllowCrossAz'] = $this->allowCrossAz;
        }

        if (null !== $this->allowDifferentGeneration) {
            $res['AllowDifferentGeneration'] = $this->allowDifferentGeneration;
        }

        if (null !== $this->dataDiskCategories) {
            if (\is_array($this->dataDiskCategories)) {
                $res['DataDiskCategories'] = [];
                $n1 = 0;
                foreach ($this->dataDiskCategories as $item1) {
                    $res['DataDiskCategories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
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

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->systemDiskCategories) {
            if (\is_array($this->systemDiskCategories)) {
                $res['SystemDiskCategories'] = [];
                $n1 = 0;
                foreach ($this->systemDiskCategories as $item1) {
                    $res['SystemDiskCategories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['ZoneIds'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['ZoneIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AllowCrossAz'])) {
            $model->allowCrossAz = $map['AllowCrossAz'];
        }

        if (isset($map['AllowDifferentGeneration'])) {
            $model->allowDifferentGeneration = $map['AllowDifferentGeneration'];
        }

        if (isset($map['DataDiskCategories'])) {
            if (!empty($map['DataDiskCategories'])) {
                $model->dataDiskCategories = [];
                $n1 = 0;
                foreach ($map['DataDiskCategories'] as $item1) {
                    $model->dataDiskCategories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
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

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = [];
                $n1 = 0;
                foreach ($map['SystemDiskCategories'] as $item1) {
                    $model->systemDiskCategories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['ZoneIds'] as $item1) {
                    $model->zoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
