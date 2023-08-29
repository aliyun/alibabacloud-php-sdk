<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaResourcesResponseBody\listMcubeNebulaResourceResult;

use AlibabaCloud\Tea\Model;

class nebulaResourceInfo extends Model
{
    /**
     * @var string
     */
    public $appCode;

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
    public $creator;

    /**
     * @var string
     */
    public $debugUrl;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $fallbackBaseUrl;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $id;

    /**
     * @var int
     */
    public $installType;

    /**
     * @var int
     */
    public $lazyLoad;

    /**
     * @var string
     */
    public $mainUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $metaId;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var int
     */
    public $packageType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $publishPeriod;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vhost;
    protected $_name = [
        'appCode'          => 'AppCode',
        'autoInstall'      => 'AutoInstall',
        'clientVersionMax' => 'ClientVersionMax',
        'clientVersionMin' => 'ClientVersionMin',
        'creator'          => 'Creator',
        'debugUrl'         => 'DebugUrl',
        'downloadUrl'      => 'DownloadUrl',
        'extendInfo'       => 'ExtendInfo',
        'extraData'        => 'ExtraData',
        'fallbackBaseUrl'  => 'FallbackBaseUrl',
        'fileSize'         => 'FileSize',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'h5Id'             => 'H5Id',
        'h5Name'           => 'H5Name',
        'h5Version'        => 'H5Version',
        'id'               => 'Id',
        'installType'      => 'InstallType',
        'lazyLoad'         => 'LazyLoad',
        'mainUrl'          => 'MainUrl',
        'md5'              => 'Md5',
        'memo'             => 'Memo',
        'metaId'           => 'MetaId',
        'modifier'         => 'Modifier',
        'packageType'      => 'PackageType',
        'platform'         => 'Platform',
        'publishPeriod'    => 'PublishPeriod',
        'releaseVersion'   => 'ReleaseVersion',
        'resourceType'     => 'ResourceType',
        'status'           => 'Status',
        'vhost'            => 'Vhost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->debugUrl) {
            $res['DebugUrl'] = $this->debugUrl;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->fallbackBaseUrl) {
            $res['FallbackBaseUrl'] = $this->fallbackBaseUrl;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->lazyLoad) {
            $res['LazyLoad'] = $this->lazyLoad;
        }
        if (null !== $this->mainUrl) {
            $res['MainUrl'] = $this->mainUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->metaId) {
            $res['MetaId'] = $this->metaId;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->publishPeriod) {
            $res['PublishPeriod'] = $this->publishPeriod;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nebulaResourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DebugUrl'])) {
            $model->debugUrl = $map['DebugUrl'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['FallbackBaseUrl'])) {
            $model->fallbackBaseUrl = $map['FallbackBaseUrl'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['LazyLoad'])) {
            $model->lazyLoad = $map['LazyLoad'];
        }
        if (isset($map['MainUrl'])) {
            $model->mainUrl = $map['MainUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['MetaId'])) {
            $model->metaId = $map['MetaId'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PublishPeriod'])) {
            $model->publishPeriod = $map['PublishPeriod'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vhost'])) {
            $model->vhost = $map['Vhost'];
        }

        return $model;
    }
}
