<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody\publicIpAddressPoolList\tags;

class publicIpAddressPoolList extends Model
{
    /**
     * @var string
     */
    public $bizType;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $ipAddressRemaining;
    /**
     * @var string
     */
    public $isp;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $publicIpAddressPoolId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string[]
     */
    public $securityProtectionTypes;
    /**
     * @var string
     */
    public $shareType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $totalIpNum;
    /**
     * @var int
     */
    public $usedIpNum;
    /**
     * @var string
     */
    public $userType;
    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'bizType'                 => 'BizType',
        'businessStatus'          => 'BusinessStatus',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'ipAddressRemaining'      => 'IpAddressRemaining',
        'isp'                     => 'Isp',
        'name'                    => 'Name',
        'ownerId'                 => 'OwnerId',
        'publicIpAddressPoolId'   => 'PublicIpAddressPoolId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityProtectionTypes' => 'SecurityProtectionTypes',
        'shareType'               => 'ShareType',
        'status'                  => 'Status',
        'tags'                    => 'Tags',
        'totalIpNum'              => 'TotalIpNum',
        'usedIpNum'               => 'UsedIpNum',
        'userType'                => 'UserType',
        'zones'                   => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->securityProtectionTypes)) {
            Model::validateArray($this->securityProtectionTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ipAddressRemaining) {
            $res['IpAddressRemaining'] = $this->ipAddressRemaining;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityProtectionTypes) {
            if (\is_array($this->securityProtectionTypes)) {
                $res['SecurityProtectionTypes'] = [];
                $n1                             = 0;
                foreach ($this->securityProtectionTypes as $item1) {
                    $res['SecurityProtectionTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (null !== $this->totalIpNum) {
            $res['TotalIpNum'] = $this->totalIpNum;
        }

        if (null !== $this->usedIpNum) {
            $res['UsedIpNum'] = $this->usedIpNum;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1           = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = $item1;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IpAddressRemaining'])) {
            $model->ipAddressRemaining = $map['IpAddressRemaining'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityProtectionTypes'])) {
            if (!empty($map['SecurityProtectionTypes'])) {
                $model->securityProtectionTypes = [];
                $n1                             = 0;
                foreach ($map['SecurityProtectionTypes'] as $item1) {
                    $model->securityProtectionTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        if (isset($map['TotalIpNum'])) {
            $model->totalIpNum = $map['TotalIpNum'];
        }

        if (isset($map['UsedIpNum'])) {
            $model->usedIpNum = $map['UsedIpNum'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1           = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
