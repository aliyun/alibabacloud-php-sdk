<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateMcubeNebulaResourceRequest extends Model
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
    public $customDomainName;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $fileUrl;

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
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $repeatNebula;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $subUrl;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vhost;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'            => 'AppId',
        'autoInstall'      => 'AutoInstall',
        'clientVersionMax' => 'ClientVersionMax',
        'clientVersionMin' => 'ClientVersionMin',
        'customDomainName' => 'CustomDomainName',
        'extendInfo'       => 'ExtendInfo',
        'fileUrl'          => 'FileUrl',
        'h5Id'             => 'H5Id',
        'h5Name'           => 'H5Name',
        'h5Version'        => 'H5Version',
        'installType'      => 'InstallType',
        'mainUrl'          => 'MainUrl',
        'onexFlag'         => 'OnexFlag',
        'platform'         => 'Platform',
        'repeatNebula'     => 'RepeatNebula',
        'resourceType'     => 'ResourceType',
        'subUrl'           => 'SubUrl',
        'tenantId'         => 'TenantId',
        'vhost'            => 'Vhost',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->customDomainName) {
            $res['CustomDomainName'] = $this->customDomainName;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->mainUrl) {
            $res['MainUrl'] = $this->mainUrl;
        }
        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->repeatNebula) {
            $res['RepeatNebula'] = $this->repeatNebula;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->subUrl) {
            $res['SubUrl'] = $this->subUrl;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMcubeNebulaResourceRequest
     */
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
        if (isset($map['CustomDomainName'])) {
            $model->customDomainName = $map['CustomDomainName'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
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
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['MainUrl'])) {
            $model->mainUrl = $map['MainUrl'];
        }
        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RepeatNebula'])) {
            $model->repeatNebula = $map['RepeatNebula'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SubUrl'])) {
            $model->subUrl = $map['SubUrl'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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
