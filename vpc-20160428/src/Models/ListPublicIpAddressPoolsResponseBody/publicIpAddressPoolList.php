<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody\publicIpAddressPoolList\tags;
use AlibabaCloud\Tea\Model;

class publicIpAddressPoolList extends Model
{
    /**
     * @description The service type of the IP address pool.
     *
     *   **CloudBox** Only cloud box users can select this type.
     *   **Default** (default)
     *
     * @example CloudBox
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the IP address pool was created. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-05-10T01:37:38Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the IP address pool.
     *
     * @example AddressPoolDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether idle IP addresses exist.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $ipAddressRemaining;

    /**
     * @description The line type.
     *
     *   **BGP**: BGP (Multi-ISP)
     *   **BGP_PRO**: BGP (Multi-ISP) Pro
     *
     * If you are allowed to use single-ISP bandwidth, one of the following values may be returned:
     *
     *   **ChinaTelecom**
     *   **ChinaUnicom**
     *   **ChinaMobile**
     *   **ChinaTelecom_L2**
     *   **ChinaUnicom_L2**
     *   **ChinaMobile_L2**
     *
     * If your services are deployed in China East 1 Finance, **BGP_FinanceCloud** is returned.
     * @example BGP
     *
     * @var string
     */
    public $isp;

    /**
     * @description The name of the IP address pool.
     *
     * @example AddressPoolName
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud account to which the IP address pool belongs.
     *
     * @example 121012345612****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the IP address pool.
     *
     * @example pippool-6wetvn6fumkgycssx****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @description The region ID of the IP address pool.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the IP address pool belongs.
     *
     * @example rg-acfmxazb4pcdvf****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The edition of Anti-DDoS.
     *
     *   If you do not set this parameter, Anti-DDoS Origin Basic is used.
     *   If the value is set to **AntiDDoS_Enhanced**, Anti-DDoS Pro/Premium is used.
     *
     * @var string[]
     */
    public $securityProtectionTypes;

    /**
     * @description The sharing type of the IP address pool.
     *
     *   If **Shared** is returned, the IP address pool is shared.
     *   If an empty value is returned, the IP address pool is not shared.
     *
     * @example Shared
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The status of the IP address pool.
     *
     *   **Created**
     *   **Deleting**
     *   **Modifying**
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The total number of available IP addresses in the public IP address pool.
     *
     * @example 100
     *
     * @var int
     */
    public $totalIpNum;

    /**
     * @description The number of used IP addresses in the public IP address pool.
     *
     * @example 20
     *
     * @var int
     */
    public $usedIpNum;

    /**
     * @description The user type. Valid values:
     *
     *   **admin**: An administrator can delete, modify, and query IP address pools, and can assign elastic IP addresses (EIPs) to the pool.
     *   **user**: A user can only assign EIPs to the IP address pool and query the IP address pool, but cannot modify or delete the IP address pool.
     *
     * @example admin
     *
     * @var bool
     */
    public $userType;

    /**
     * @description The zone of the IP address pool. This parameter is returned only when the service type of the IP address pool is CloudBox.
     *
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
    }

    public function toMap()
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
            $res['SecurityProtectionTypes'] = $this->securityProtectionTypes;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddressPoolList
     */
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
                $model->securityProtectionTypes = $map['SecurityProtectionTypes'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
