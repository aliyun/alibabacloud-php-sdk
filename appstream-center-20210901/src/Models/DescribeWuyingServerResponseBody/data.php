<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponseBody\data\privateIpSets;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponseBody\data\serverInstanceTypeInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeWuyingServerResponseBody\data\serverModelInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var privateIpSets[]
     */
    public $privateIpSets;

    /**
     * @var serverInstanceTypeInfo
     */
    public $serverInstanceTypeInfo;

    /**
     * @var serverModelInfo
     */
    public $serverModelInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportASP;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $wuyingServerId;

    /**
     * @var string
     */
    public $wuyingServerName;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'expiredTime' => 'ExpiredTime',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteType' => 'OfficeSiteType',
        'osType' => 'OsType',
        'privateIpSets' => 'PrivateIpSets',
        'serverInstanceTypeInfo' => 'ServerInstanceTypeInfo',
        'serverModelInfo' => 'ServerModelInfo',
        'status' => 'Status',
        'supportASP' => 'SupportASP',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
        'wuyingServerId' => 'WuyingServerId',
        'wuyingServerName' => 'WuyingServerName',
    ];

    public function validate()
    {
        if (\is_array($this->privateIpSets)) {
            Model::validateArray($this->privateIpSets);
        }
        if (null !== $this->serverInstanceTypeInfo) {
            $this->serverInstanceTypeInfo->validate();
        }
        if (null !== $this->serverModelInfo) {
            $this->serverModelInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->privateIpSets) {
            if (\is_array($this->privateIpSets)) {
                $res['PrivateIpSets'] = [];
                $n1 = 0;
                foreach ($this->privateIpSets as $item1) {
                    $res['PrivateIpSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverInstanceTypeInfo) {
            $res['ServerInstanceTypeInfo'] = null !== $this->serverInstanceTypeInfo ? $this->serverInstanceTypeInfo->toArray($noStream) : $this->serverInstanceTypeInfo;
        }

        if (null !== $this->serverModelInfo) {
            $res['ServerModelInfo'] = null !== $this->serverModelInfo ? $this->serverModelInfo->toArray($noStream) : $this->serverModelInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportASP) {
            $res['SupportASP'] = $this->supportASP;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
        }

        if (null !== $this->wuyingServerName) {
            $res['WuyingServerName'] = $this->wuyingServerName;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PrivateIpSets'])) {
            if (!empty($map['PrivateIpSets'])) {
                $model->privateIpSets = [];
                $n1 = 0;
                foreach ($map['PrivateIpSets'] as $item1) {
                    $model->privateIpSets[$n1] = privateIpSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerInstanceTypeInfo'])) {
            $model->serverInstanceTypeInfo = serverInstanceTypeInfo::fromMap($map['ServerInstanceTypeInfo']);
        }

        if (isset($map['ServerModelInfo'])) {
            $model->serverModelInfo = serverModelInfo::fromMap($map['ServerModelInfo']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportASP'])) {
            $model->supportASP = $map['SupportASP'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        if (isset($map['WuyingServerName'])) {
            $model->wuyingServerName = $map['WuyingServerName'];
        }

        return $model;
    }
}
