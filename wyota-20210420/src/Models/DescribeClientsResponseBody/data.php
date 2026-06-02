<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeClientsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeClientsResponseBody\data\functionSupport;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeClientsResponseBody\data\hardwareInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $areaSite;

    /**
     * @var int
     */
    public $bindUserCount;

    /**
     * @var string
     */
    public $bindUserId;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $currentConnectDesktop;

    /**
     * @var string
     */
    public $currentLoginUser;

    /**
     * @var string
     */
    public $customResInvalidReason;

    /**
     * @var string
     */
    public $customResourceId;

    /**
     * @var string
     */
    public $customResourceName;

    /**
     * @var bool
     */
    public $customResourceStatus;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopRegionId;

    /**
     * @var string
     */
    public $deviceOs;

    /**
     * @var functionSupport
     */
    public $functionSupport;

    /**
     * @var hardwareInfo
     */
    public $hardwareInfo;

    /**
     * @var string
     */
    public $hostOsInfo;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $ipGeoLocation;

    /**
     * @var string
     */
    public $ipv4;

    /**
     * @var string
     */
    public $lastLoginUser;

    /**
     * @var string
     */
    public $localDeviceSn;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $mainBizType;

    /**
     * @var string
     */
    public $manageTime;

    /**
     * @var int
     */
    public $manageTimestamp;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelPreviewUrl;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var bool
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $publicIpv4;

    /**
     * @var string
     */
    public $setPasswordFreeLoginUserTime;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $upgradeDownloadType;

    /**
     * @var int
     */
    public $userBindCount;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wosAppVersion;
    protected $_name = [
        'aliUid' => 'AliUid',
        'alias' => 'Alias',
        'areaSite' => 'AreaSite',
        'bindUserCount' => 'BindUserCount',
        'bindUserId' => 'BindUserId',
        'buildId' => 'BuildId',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'currentConnectDesktop' => 'CurrentConnectDesktop',
        'currentLoginUser' => 'CurrentLoginUser',
        'customResInvalidReason' => 'CustomResInvalidReason',
        'customResourceId' => 'CustomResourceId',
        'customResourceName' => 'CustomResourceName',
        'customResourceStatus' => 'CustomResourceStatus',
        'desktopId' => 'DesktopId',
        'desktopRegionId' => 'DesktopRegionId',
        'deviceOs' => 'DeviceOs',
        'functionSupport' => 'FunctionSupport',
        'hardwareInfo' => 'HardwareInfo',
        'hostOsInfo' => 'HostOsInfo',
        'inManage' => 'InManage',
        'ipGeoLocation' => 'IpGeoLocation',
        'ipv4' => 'Ipv4',
        'lastLoginUser' => 'LastLoginUser',
        'localDeviceSn' => 'LocalDeviceSn',
        'locationInfo' => 'LocationInfo',
        'loginUser' => 'LoginUser',
        'mainBizType' => 'MainBizType',
        'manageTime' => 'ManageTime',
        'manageTimestamp' => 'ManageTimestamp',
        'model' => 'Model',
        'modelPreviewUrl' => 'ModelPreviewUrl',
        'online' => 'Online',
        'onlineStatus' => 'OnlineStatus',
        'passwordFreeLoginUser' => 'PasswordFreeLoginUser',
        'platform' => 'Platform',
        'productName' => 'ProductName',
        'publicIpv4' => 'PublicIpv4',
        'setPasswordFreeLoginUserTime' => 'SetPasswordFreeLoginUserTime',
        'terminalGroupId' => 'TerminalGroupId',
        'upgradeDownloadType' => 'UpgradeDownloadType',
        'userBindCount' => 'UserBindCount',
        'uuid' => 'Uuid',
        'wosAppVersion' => 'WosAppVersion',
    ];

    public function validate()
    {
        if (null !== $this->functionSupport) {
            $this->functionSupport->validate();
        }
        if (null !== $this->hardwareInfo) {
            $this->hardwareInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->areaSite) {
            $res['AreaSite'] = $this->areaSite;
        }

        if (null !== $this->bindUserCount) {
            $res['BindUserCount'] = $this->bindUserCount;
        }

        if (null !== $this->bindUserId) {
            $res['BindUserId'] = $this->bindUserId;
        }

        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->currentConnectDesktop) {
            $res['CurrentConnectDesktop'] = $this->currentConnectDesktop;
        }

        if (null !== $this->currentLoginUser) {
            $res['CurrentLoginUser'] = $this->currentLoginUser;
        }

        if (null !== $this->customResInvalidReason) {
            $res['CustomResInvalidReason'] = $this->customResInvalidReason;
        }

        if (null !== $this->customResourceId) {
            $res['CustomResourceId'] = $this->customResourceId;
        }

        if (null !== $this->customResourceName) {
            $res['CustomResourceName'] = $this->customResourceName;
        }

        if (null !== $this->customResourceStatus) {
            $res['CustomResourceStatus'] = $this->customResourceStatus;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopRegionId) {
            $res['DesktopRegionId'] = $this->desktopRegionId;
        }

        if (null !== $this->deviceOs) {
            $res['DeviceOs'] = $this->deviceOs;
        }

        if (null !== $this->functionSupport) {
            $res['FunctionSupport'] = null !== $this->functionSupport ? $this->functionSupport->toArray($noStream) : $this->functionSupport;
        }

        if (null !== $this->hardwareInfo) {
            $res['HardwareInfo'] = null !== $this->hardwareInfo ? $this->hardwareInfo->toArray($noStream) : $this->hardwareInfo;
        }

        if (null !== $this->hostOsInfo) {
            $res['HostOsInfo'] = $this->hostOsInfo;
        }

        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->ipGeoLocation) {
            $res['IpGeoLocation'] = $this->ipGeoLocation;
        }

        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }

        if (null !== $this->lastLoginUser) {
            $res['LastLoginUser'] = $this->lastLoginUser;
        }

        if (null !== $this->localDeviceSn) {
            $res['LocalDeviceSn'] = $this->localDeviceSn;
        }

        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }

        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }

        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
        }

        if (null !== $this->manageTime) {
            $res['ManageTime'] = $this->manageTime;
        }

        if (null !== $this->manageTimestamp) {
            $res['ManageTimestamp'] = $this->manageTimestamp;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelPreviewUrl) {
            $res['ModelPreviewUrl'] = $this->modelPreviewUrl;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }

        if (null !== $this->passwordFreeLoginUser) {
            $res['PasswordFreeLoginUser'] = $this->passwordFreeLoginUser;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->publicIpv4) {
            $res['PublicIpv4'] = $this->publicIpv4;
        }

        if (null !== $this->setPasswordFreeLoginUserTime) {
            $res['SetPasswordFreeLoginUserTime'] = $this->setPasswordFreeLoginUserTime;
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->upgradeDownloadType) {
            $res['UpgradeDownloadType'] = $this->upgradeDownloadType;
        }

        if (null !== $this->userBindCount) {
            $res['UserBindCount'] = $this->userBindCount;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->wosAppVersion) {
            $res['WosAppVersion'] = $this->wosAppVersion;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['AreaSite'])) {
            $model->areaSite = $map['AreaSite'];
        }

        if (isset($map['BindUserCount'])) {
            $model->bindUserCount = $map['BindUserCount'];
        }

        if (isset($map['BindUserId'])) {
            $model->bindUserId = $map['BindUserId'];
        }

        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['CurrentConnectDesktop'])) {
            $model->currentConnectDesktop = $map['CurrentConnectDesktop'];
        }

        if (isset($map['CurrentLoginUser'])) {
            $model->currentLoginUser = $map['CurrentLoginUser'];
        }

        if (isset($map['CustomResInvalidReason'])) {
            $model->customResInvalidReason = $map['CustomResInvalidReason'];
        }

        if (isset($map['CustomResourceId'])) {
            $model->customResourceId = $map['CustomResourceId'];
        }

        if (isset($map['CustomResourceName'])) {
            $model->customResourceName = $map['CustomResourceName'];
        }

        if (isset($map['CustomResourceStatus'])) {
            $model->customResourceStatus = $map['CustomResourceStatus'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopRegionId'])) {
            $model->desktopRegionId = $map['DesktopRegionId'];
        }

        if (isset($map['DeviceOs'])) {
            $model->deviceOs = $map['DeviceOs'];
        }

        if (isset($map['FunctionSupport'])) {
            $model->functionSupport = functionSupport::fromMap($map['FunctionSupport']);
        }

        if (isset($map['HardwareInfo'])) {
            $model->hardwareInfo = hardwareInfo::fromMap($map['HardwareInfo']);
        }

        if (isset($map['HostOsInfo'])) {
            $model->hostOsInfo = $map['HostOsInfo'];
        }

        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['IpGeoLocation'])) {
            $model->ipGeoLocation = $map['IpGeoLocation'];
        }

        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }

        if (isset($map['LastLoginUser'])) {
            $model->lastLoginUser = $map['LastLoginUser'];
        }

        if (isset($map['LocalDeviceSn'])) {
            $model->localDeviceSn = $map['LocalDeviceSn'];
        }

        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }

        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }

        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }

        if (isset($map['ManageTime'])) {
            $model->manageTime = $map['ManageTime'];
        }

        if (isset($map['ManageTimestamp'])) {
            $model->manageTimestamp = $map['ManageTimestamp'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelPreviewUrl'])) {
            $model->modelPreviewUrl = $map['ModelPreviewUrl'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }

        if (isset($map['PasswordFreeLoginUser'])) {
            $model->passwordFreeLoginUser = $map['PasswordFreeLoginUser'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['PublicIpv4'])) {
            $model->publicIpv4 = $map['PublicIpv4'];
        }

        if (isset($map['SetPasswordFreeLoginUserTime'])) {
            $model->setPasswordFreeLoginUserTime = $map['SetPasswordFreeLoginUserTime'];
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['UpgradeDownloadType'])) {
            $model->upgradeDownloadType = $map['UpgradeDownloadType'];
        }

        if (isset($map['UserBindCount'])) {
            $model->userBindCount = $map['UserBindCount'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['WosAppVersion'])) {
            $model->wosAppVersion = $map['WosAppVersion'];
        }

        return $model;
    }
}
