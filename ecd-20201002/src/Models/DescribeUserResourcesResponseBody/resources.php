<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\clients;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\desktopDurationList;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\osUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\sessions;

class resources extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $authMode;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $centerResourceId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var clients[]
     */
    public $clients;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
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
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $externalDomainId;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @var bool
     */
    public $globalStatus;

    /**
     * @var bool
     */
    public $hasUpgrade;

    /**
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @var string
     */
    public $icon;

    /**
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
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osDescription;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var osUpdate
     */
    public $osUpdate;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $realDesktopId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionLocation;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceLevel;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceSessionStatus;

    /**
     * @var string
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var bool
     */
    public $supportHibernation;

    /**
     * @var string[]
     */
    public $supportedActions;

    /**
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

    public function validate()
    {
        if (\is_array($this->clients)) {
            Model::validateArray($this->clients);
        }
        if (\is_array($this->desktopDurationList)) {
            Model::validateArray($this->desktopDurationList);
        }
        if (\is_array($this->desktopTimers)) {
            Model::validateArray($this->desktopTimers);
        }
        if (null !== $this->fotaUpdate) {
            $this->fotaUpdate->validate();
        }
        if (\is_array($this->managementStatuses)) {
            Model::validateArray($this->managementStatuses);
        }
        if (null !== $this->osUpdate) {
            $this->osUpdate->validate();
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        if (\is_array($this->supportedActions)) {
            Model::validateArray($this->supportedActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->clients)) {
                $res['Clients'] = [];
                $n1 = 0;
                foreach ($this->clients as $item1) {
                    $res['Clients'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->desktopDurationList)) {
                $res['DesktopDurationList'] = [];
                $n1 = 0;
                foreach ($this->desktopDurationList as $item1) {
                    $res['DesktopDurationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopTimers) {
            if (\is_array($this->desktopTimers)) {
                $res['DesktopTimers'] = [];
                $n1 = 0;
                foreach ($this->desktopTimers as $item1) {
                    $res['DesktopTimers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['FotaUpdate'] = null !== $this->fotaUpdate ? $this->fotaUpdate->toArray($noStream) : $this->fotaUpdate;
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
            if (\is_array($this->managementStatuses)) {
                $res['ManagementStatuses'] = [];
                $n1 = 0;
                foreach ($this->managementStatuses as $item1) {
                    $res['ManagementStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['OsUpdate'] = null !== $this->osUpdate ? $this->osUpdate->toArray($noStream) : $this->osUpdate;
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
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->supportedActions)) {
                $res['SupportedActions'] = [];
                $n1 = 0;
                foreach ($this->supportedActions as $item1) {
                    $res['SupportedActions'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Clients'] as $item1) {
                    $model->clients[$n1] = clients::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['DesktopDurationList'] as $item1) {
                    $model->desktopDurationList[$n1] = desktopDurationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n1 = 0;
                foreach ($map['DesktopTimers'] as $item1) {
                    $model->desktopTimers[$n1] = desktopTimers::fromMap($item1);
                    ++$n1;
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
                $model->managementStatuses = [];
                $n1 = 0;
                foreach ($map['ManagementStatuses'] as $item1) {
                    $model->managementStatuses[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
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
                $model->supportedActions = [];
                $n1 = 0;
                foreach ($map['SupportedActions'] as $item1) {
                    $model->supportedActions[$n1] = $item1;
                    ++$n1;
                }
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
