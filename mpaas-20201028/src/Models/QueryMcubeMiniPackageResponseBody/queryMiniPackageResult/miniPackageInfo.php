<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniPackageResponseBody\queryMiniPackageResult;

use AlibabaCloud\Tea\Model;

class miniPackageInfo extends Model
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
     * @var string
     */
    public $mainUrl;

    /**
     * @var string
     */
    public $memo;

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
     * @var int
     */
    public $resourceType;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'appCode'          => 'AppCode',
        'autoInstall'      => 'AutoInstall',
        'clientVersionMax' => 'ClientVersionMax',
        'clientVersionMin' => 'ClientVersionMin',
        'downloadUrl'      => 'DownloadUrl',
        'extendInfo'       => 'ExtendInfo',
        'extraData'        => 'ExtraData',
        'fallbackBaseUrl'  => 'FallbackBaseUrl',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'h5Id'             => 'H5Id',
        'h5Name'           => 'H5Name',
        'h5Version'        => 'H5Version',
        'id'               => 'Id',
        'installType'      => 'InstallType',
        'mainUrl'          => 'MainUrl',
        'memo'             => 'Memo',
        'packageType'      => 'PackageType',
        'platform'         => 'Platform',
        'publishPeriod'    => 'PublishPeriod',
        'resourceType'     => 'ResourceType',
        'status'           => 'Status',
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
        if (null !== $this->mainUrl) {
            $res['MainUrl'] = $this->mainUrl;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return miniPackageInfo
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
        if (isset($map['MainUrl'])) {
            $model->mainUrl = $map['MainUrl'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
