<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateAppVersionRequest extends Model
{
    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var string
     */
    public $isAllowNewInstall;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $installType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $isSilentUpgrade;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $isNeedRestart;

    /**
     * @var string
     */
    public $blackVersionList;

    /**
     * @var string
     */
    public $whiteVersionList;

    /**
     * @var string
     */
    public $restartType;

    /**
     * @var string
     */
    public $restartAppType;

    /**
     * @var string
     */
    public $restartAppParam;

    /**
     * @var string
     */
    public $deviceAdapterList;

    /**
     * @var string
     */
    public $apkMd5;
    protected $_name = [
        'isForceUpgrade'    => 'IsForceUpgrade',
        'isAllowNewInstall' => 'IsAllowNewInstall',
        'projectId'         => 'ProjectId',
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'versionCode'       => 'VersionCode',
        'installType'       => 'InstallType',
        'remark'            => 'Remark',
        'releaseNote'       => 'ReleaseNote',
        'isSilentUpgrade'   => 'IsSilentUpgrade',
        'packageUrl'        => 'PackageUrl',
        'isNeedRestart'     => 'IsNeedRestart',
        'blackVersionList'  => 'BlackVersionList',
        'whiteVersionList'  => 'WhiteVersionList',
        'restartType'       => 'RestartType',
        'restartAppType'    => 'RestartAppType',
        'restartAppParam'   => 'RestartAppParam',
        'deviceAdapterList' => 'DeviceAdapterList',
        'apkMd5'            => 'ApkMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->isAllowNewInstall) {
            $res['IsAllowNewInstall'] = $this->isAllowNewInstall;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->isSilentUpgrade) {
            $res['IsSilentUpgrade'] = $this->isSilentUpgrade;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->isNeedRestart) {
            $res['IsNeedRestart'] = $this->isNeedRestart;
        }
        if (null !== $this->blackVersionList) {
            $res['BlackVersionList'] = $this->blackVersionList;
        }
        if (null !== $this->whiteVersionList) {
            $res['WhiteVersionList'] = $this->whiteVersionList;
        }
        if (null !== $this->restartType) {
            $res['RestartType'] = $this->restartType;
        }
        if (null !== $this->restartAppType) {
            $res['RestartAppType'] = $this->restartAppType;
        }
        if (null !== $this->restartAppParam) {
            $res['RestartAppParam'] = $this->restartAppParam;
        }
        if (null !== $this->deviceAdapterList) {
            $res['DeviceAdapterList'] = $this->deviceAdapterList;
        }
        if (null !== $this->apkMd5) {
            $res['ApkMd5'] = $this->apkMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['IsAllowNewInstall'])) {
            $model->isAllowNewInstall = $map['IsAllowNewInstall'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['IsSilentUpgrade'])) {
            $model->isSilentUpgrade = $map['IsSilentUpgrade'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['IsNeedRestart'])) {
            $model->isNeedRestart = $map['IsNeedRestart'];
        }
        if (isset($map['BlackVersionList'])) {
            $model->blackVersionList = $map['BlackVersionList'];
        }
        if (isset($map['WhiteVersionList'])) {
            $model->whiteVersionList = $map['WhiteVersionList'];
        }
        if (isset($map['RestartType'])) {
            $model->restartType = $map['RestartType'];
        }
        if (isset($map['RestartAppType'])) {
            $model->restartAppType = $map['RestartAppType'];
        }
        if (isset($map['RestartAppParam'])) {
            $model->restartAppParam = $map['RestartAppParam'];
        }
        if (isset($map['DeviceAdapterList'])) {
            $model->deviceAdapterList = $map['DeviceAdapterList'];
        }
        if (isset($map['ApkMd5'])) {
            $model->apkMd5 = $map['ApkMd5'];
        }

        return $model;
    }
}
