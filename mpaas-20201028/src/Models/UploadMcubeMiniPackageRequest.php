<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class UploadMcubeMiniPackageRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $autoInstall;

    /**
     * @var string
     */
    public $clientVersionMax;

    /**
     * @var string
     */
    public $clientVersionMin;

    /**
     * @var string
     */
    public $enableKeepAlive;

    /**
     * @var string
     */
    public $enableOptionMenu;

    /**
     * @var int
     */
    public $enableTabBar;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;

    /**
     * @var string
     */
    public $h5Version;

    /**
     * @var string
     */
    public $iconFileUrl;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var int
     */
    public $installType;

    /**
     * @var string
     */
    public $mainUrl;

    /**
     * @var bool
     */
    public $onexFlag;

    /**
     * @var int
     */
    public $packageType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $resourceFileUrl;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vhost;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'autoInstall' => 'AutoInstall',
        'clientVersionMax' => 'ClientVersionMax',
        'clientVersionMin' => 'ClientVersionMin',
        'enableKeepAlive' => 'EnableKeepAlive',
        'enableOptionMenu' => 'EnableOptionMenu',
        'enableTabBar' => 'EnableTabBar',
        'extendInfo' => 'ExtendInfo',
        'h5Id' => 'H5Id',
        'h5Name' => 'H5Name',
        'h5Version' => 'H5Version',
        'iconFileUrl' => 'IconFileUrl',
        'iconUrl' => 'IconUrl',
        'installType' => 'InstallType',
        'mainUrl' => 'MainUrl',
        'onexFlag' => 'OnexFlag',
        'packageType' => 'PackageType',
        'platform' => 'Platform',
        'resourceFileUrl' => 'ResourceFileUrl',
        'resourceType' => 'ResourceType',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
        'vhost' => 'Vhost',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->clientVersionMax) {
            $res['ClientVersionMax'] = $this->clientVersionMax;
        }

        if (null !== $this->clientVersionMin) {
            $res['ClientVersionMin'] = $this->clientVersionMin;
        }

        if (null !== $this->enableKeepAlive) {
            $res['EnableKeepAlive'] = $this->enableKeepAlive;
        }

        if (null !== $this->enableOptionMenu) {
            $res['EnableOptionMenu'] = $this->enableOptionMenu;
        }

        if (null !== $this->enableTabBar) {
            $res['EnableTabBar'] = $this->enableTabBar;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }

        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
        }

        if (null !== $this->h5Version) {
            $res['H5Version'] = $this->h5Version;
        }

        if (null !== $this->iconFileUrl) {
            $res['IconFileUrl'] = $this->iconFileUrl;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }

        if (null !== $this->mainUrl) {
            $res['MainUrl'] = $this->mainUrl;
        }

        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->resourceFileUrl) {
            $res['ResourceFileUrl'] = $this->resourceFileUrl;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['ClientVersionMax'])) {
            $model->clientVersionMax = $map['ClientVersionMax'];
        }

        if (isset($map['ClientVersionMin'])) {
            $model->clientVersionMin = $map['ClientVersionMin'];
        }

        if (isset($map['EnableKeepAlive'])) {
            $model->enableKeepAlive = $map['EnableKeepAlive'];
        }

        if (isset($map['EnableOptionMenu'])) {
            $model->enableOptionMenu = $map['EnableOptionMenu'];
        }

        if (isset($map['EnableTabBar'])) {
            $model->enableTabBar = $map['EnableTabBar'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }

        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
        }

        if (isset($map['H5Version'])) {
            $model->h5Version = $map['H5Version'];
        }

        if (isset($map['IconFileUrl'])) {
            $model->iconFileUrl = $map['IconFileUrl'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }

        if (isset($map['MainUrl'])) {
            $model->mainUrl = $map['MainUrl'];
        }

        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ResourceFileUrl'])) {
            $model->resourceFileUrl = $map['ResourceFileUrl'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Vhost'])) {
            $model->vhost = $map['Vhost'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
