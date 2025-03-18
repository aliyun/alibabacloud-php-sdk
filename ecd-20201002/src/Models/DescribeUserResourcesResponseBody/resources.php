<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\clients;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\desktopDurationList;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\osUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\sessions;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @example 194101959****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example app-0001
     *
     * @var string
     */
    public $appId;

    /**
     * @example App
     *
     * @var string
     */
    public $authMode;

    /**
     * @example 0
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 1
     *
     * @var int
     */
    public $categoryType;

    /**
     * @example cn-shanghai+cds-695277****
     *
     * @var string
     */
    public $cdsName;

    /**
     * @example ecds-0****
     *
     * @var string
     */
    public $centerResourceId;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var clients[]
     */
    public $clients;

    /**
     * @example {"authMode":"App"}
     *
     * @var string
     */
    public $connectionProperties;

    /**
     * @example 2024-12-11T07:12:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var desktopDurationList[]
     */
    public $desktopDurationList;

    /**
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @example 2025-02-22T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example stg114510
     *
     * @var string
     */
    public $externalDomainId;

    /**
     * @example test001
     *
     * @var string
     */
    public $externalUserId;

    /**
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @example true
     *
     * @var bool
     */
    public $globalStatus;

    /**
     * @var bool
     */
    public $hasUpgrade;

    /**
     * @example false
     *
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @example http://example.com/icon.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 2025-01-24T03:12:04Z
     *
     * @var string
     */
    public $lastStartTime;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string[]
     */
    public $managementStatuses;

    /**
     * @example cn-shanghai+dir-3367****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example Normal
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example Windows Server 2022
     *
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osDescription;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @var osUpdate
     */
    public $osUpdate;

    /**
     * @example AndroidCloud
     *
     * @var string
     */
    public $productType;

    /**
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example ecd-0001
     *
     * @var string
     */
    public $realDesktopId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Mainland
     *
     * @var string
     */
    public $regionLocation;

    /**
     * @example dg-0****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ecd-d19tya8zi4****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Center
     *
     * @var string
     */
    public $resourceLevel;

    /**
     * @example testName01
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example Connected
     *
     * @var string
     */
    public $resourceSessionStatus;

    /**
     * @example Running
     *
     * @var string
     */
    public $resourceStatus;

    /**
     * @example Desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example SINGLE_SESSION
     *
     * @var string
     */
    public $sessionType;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $subPayType;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportHibernation;

    /**
     * @var string[]
     */
    public $supportedActions;

    /**
     * @example #FFFFFF
     *
     * @var string
     */
    public $themeColor;

    /**
     * @var string
     */
    public $userCustomName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'accessType' => 'AccessType',
        'aliUid' => 'AliUid',
        'appId' => 'AppId',
        'authMode' => 'AuthMode',
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'cdsName' => 'CdsName',
        'centerResourceId' => 'CenterResourceId',
        'chargeType' => 'ChargeType',
        'clients' => 'Clients',
        'connectionProperties' => 'ConnectionProperties',
        'createTime' => 'CreateTime',
        'desktopDurationList' => 'DesktopDurationList',
        'desktopTimers' => 'DesktopTimers',
        'expiredTime' => 'ExpiredTime',
        'externalDomainId' => 'ExternalDomainId',
        'externalUserId' => 'ExternalUserId',
        'fotaUpdate' => 'FotaUpdate',
        'globalStatus' => 'GlobalStatus',
        'hasUpgrade' => 'HasUpgrade',
        'hibernationBeta' => 'HibernationBeta',
        'icon' => 'Icon',
        'lastStartTime' => 'LastStartTime',
        'localName' => 'LocalName',
        'managementStatuses' => 'ManagementStatuses',
        'officeSiteId' => 'OfficeSiteId',
        'orderStatus' => 'OrderStatus',
        'os' => 'Os',
        'osDescription' => 'OsDescription',
        'osType' => 'OsType',
        'osUpdate' => 'OsUpdate',
        'productType' => 'ProductType',
        'protocolType' => 'ProtocolType',
        'realDesktopId' => 'RealDesktopId',
        'regionId' => 'RegionId',
        'regionLocation' => 'RegionLocation',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceLevel' => 'ResourceLevel',
        'resourceName' => 'ResourceName',
        'resourceSessionStatus' => 'ResourceSessionStatus',
        'resourceStatus' => 'ResourceStatus',
        'resourceType' => 'ResourceType',
        'sessionType' => 'SessionType',
        'sessions' => 'Sessions',
        'subPayType' => 'SubPayType',
        'supportHibernation' => 'SupportHibernation',
        'supportedActions' => 'SupportedActions',
        'themeColor' => 'ThemeColor',
        'userCustomName' => 'UserCustomName',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authMode) {
            $res['AuthMode'] = $this->authMode;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->centerResourceId) {
            $res['CenterResourceId'] = $this->centerResourceId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clients) {
            $res['Clients'] = [];
            if (null !== $this->clients && \is_array($this->clients)) {
                $n = 0;
                foreach ($this->clients as $item) {
                    $res['Clients'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->desktopDurationList) {
            $res['DesktopDurationList'] = [];
            if (null !== $this->desktopDurationList && \is_array($this->desktopDurationList)) {
                $n = 0;
                foreach ($this->desktopDurationList as $item) {
                    $res['DesktopDurationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->desktopTimers) {
            $res['DesktopTimers'] = [];
            if (null !== $this->desktopTimers && \is_array($this->desktopTimers)) {
                $n = 0;
                foreach ($this->desktopTimers as $item) {
                    $res['DesktopTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->externalDomainId) {
            $res['ExternalDomainId'] = $this->externalDomainId;
        }
        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }
        if (null !== $this->fotaUpdate) {
            $res['FotaUpdate'] = null !== $this->fotaUpdate ? $this->fotaUpdate->toMap() : null;
        }
        if (null !== $this->globalStatus) {
            $res['GlobalStatus'] = $this->globalStatus;
        }
        if (null !== $this->hasUpgrade) {
            $res['HasUpgrade'] = $this->hasUpgrade;
        }
        if (null !== $this->hibernationBeta) {
            $res['HibernationBeta'] = $this->hibernationBeta;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->managementStatuses) {
            $res['ManagementStatuses'] = $this->managementStatuses;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osDescription) {
            $res['OsDescription'] = $this->osDescription;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->osUpdate) {
            $res['OsUpdate'] = null !== $this->osUpdate ? $this->osUpdate->toMap() : null;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->realDesktopId) {
            $res['RealDesktopId'] = $this->realDesktopId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionLocation) {
            $res['RegionLocation'] = $this->regionLocation;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceSessionStatus) {
            $res['ResourceSessionStatus'] = $this->resourceSessionStatus;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }
        if (null !== $this->supportHibernation) {
            $res['SupportHibernation'] = $this->supportHibernation;
        }
        if (null !== $this->supportedActions) {
            $res['SupportedActions'] = $this->supportedActions;
        }
        if (null !== $this->themeColor) {
            $res['ThemeColor'] = $this->themeColor;
        }
        if (null !== $this->userCustomName) {
            $res['UserCustomName'] = $this->userCustomName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthMode'])) {
            $model->authMode = $map['AuthMode'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['CenterResourceId'])) {
            $model->centerResourceId = $map['CenterResourceId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n = 0;
                foreach ($map['Clients'] as $item) {
                    $model->clients[$n++] = null !== $item ? clients::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DesktopDurationList'])) {
            if (!empty($map['DesktopDurationList'])) {
                $model->desktopDurationList = [];
                $n = 0;
                foreach ($map['DesktopDurationList'] as $item) {
                    $model->desktopDurationList[$n++] = null !== $item ? desktopDurationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n = 0;
                foreach ($map['DesktopTimers'] as $item) {
                    $model->desktopTimers[$n++] = null !== $item ? desktopTimers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ExternalDomainId'])) {
            $model->externalDomainId = $map['ExternalDomainId'];
        }
        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }
        if (isset($map['FotaUpdate'])) {
            $model->fotaUpdate = fotaUpdate::fromMap($map['FotaUpdate']);
        }
        if (isset($map['GlobalStatus'])) {
            $model->globalStatus = $map['GlobalStatus'];
        }
        if (isset($map['HasUpgrade'])) {
            $model->hasUpgrade = $map['HasUpgrade'];
        }
        if (isset($map['HibernationBeta'])) {
            $model->hibernationBeta = $map['HibernationBeta'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ManagementStatuses'])) {
            if (!empty($map['ManagementStatuses'])) {
                $model->managementStatuses = $map['ManagementStatuses'];
            }
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsDescription'])) {
            $model->osDescription = $map['OsDescription'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OsUpdate'])) {
            $model->osUpdate = osUpdate::fromMap($map['OsUpdate']);
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RealDesktopId'])) {
            $model->realDesktopId = $map['RealDesktopId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionLocation'])) {
            $model->regionLocation = $map['RegionLocation'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceSessionStatus'])) {
            $model->resourceSessionStatus = $map['ResourceSessionStatus'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }
        if (isset($map['SupportHibernation'])) {
            $model->supportHibernation = $map['SupportHibernation'];
        }
        if (isset($map['SupportedActions'])) {
            if (!empty($map['SupportedActions'])) {
                $model->supportedActions = $map['SupportedActions'];
            }
        }
        if (isset($map['ThemeColor'])) {
            $model->themeColor = $map['ThemeColor'];
        }
        if (isset($map['UserCustomName'])) {
            $model->userCustomName = $map['UserCustomName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
