<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeAppVersionResponseBody\appVersion\adapters;
use AlibabaCloud\Tea\Model;

class appVersion extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $isAllowNewInstall;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $apkMd5;

    /**
     * @var string
     */
    public $restartAppParam;

    /**
     * @var string
     */
    public $whiteVersionList;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $restartAppType;

    /**
     * @var int
     */
    public $versionCode;

    /**
     * @var string
     */
    public $blackVersionList;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var adapters[]
     */
    public $adapters;

    /**
     * @var string
     */
    public $isSilentUpgrade;

    /**
     * @var string
     */
    public $installType;

    /**
     * @var string
     */
    public $isNeedRestart;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $restartType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $originalUrl;
    protected $_name = [
        'status'            => 'Status',
        'isAllowNewInstall' => 'IsAllowNewInstall',
        'releaseNote'       => 'ReleaseNote',
        'packageName'       => 'PackageName',
        'remark'            => 'Remark',
        'statusName'        => 'StatusName',
        'apkMd5'            => 'ApkMd5',
        'restartAppParam'   => 'RestartAppParam',
        'whiteVersionList'  => 'WhiteVersionList',
        'appName'           => 'AppName',
        'appId'             => 'AppId',
        'restartAppType'    => 'RestartAppType',
        'versionCode'       => 'VersionCode',
        'blackVersionList'  => 'BlackVersionList',
        'gmtModify'         => 'GmtModify',
        'downloadUrl'       => 'DownloadUrl',
        'adapters'          => 'Adapters',
        'isSilentUpgrade'   => 'IsSilentUpgrade',
        'installType'       => 'InstallType',
        'isNeedRestart'     => 'IsNeedRestart',
        'size'              => 'Size',
        'restartType'       => 'RestartType',
        'gmtCreate'         => 'GmtCreate',
        'md5'               => 'Md5',
        'appVersion'        => 'AppVersion',
        'isForceUpgrade'    => 'IsForceUpgrade',
        'id'                => 'Id',
        'originalUrl'       => 'OriginalUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isAllowNewInstall) {
            $res['IsAllowNewInstall'] = $this->isAllowNewInstall;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->apkMd5) {
            $res['ApkMd5'] = $this->apkMd5;
        }
        if (null !== $this->restartAppParam) {
            $res['RestartAppParam'] = $this->restartAppParam;
        }
        if (null !== $this->whiteVersionList) {
            $res['WhiteVersionList'] = $this->whiteVersionList;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->restartAppType) {
            $res['RestartAppType'] = $this->restartAppType;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->blackVersionList) {
            $res['BlackVersionList'] = $this->blackVersionList;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->adapters) {
            $res['Adapters'] = [];
            if (null !== $this->adapters && \is_array($this->adapters)) {
                $n = 0;
                foreach ($this->adapters as $item) {
                    $res['Adapters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isSilentUpgrade) {
            $res['IsSilentUpgrade'] = $this->isSilentUpgrade;
        }
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->isNeedRestart) {
            $res['IsNeedRestart'] = $this->isNeedRestart;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->restartType) {
            $res['RestartType'] = $this->restartType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->originalUrl) {
            $res['OriginalUrl'] = $this->originalUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsAllowNewInstall'])) {
            $model->isAllowNewInstall = $map['IsAllowNewInstall'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['ApkMd5'])) {
            $model->apkMd5 = $map['ApkMd5'];
        }
        if (isset($map['RestartAppParam'])) {
            $model->restartAppParam = $map['RestartAppParam'];
        }
        if (isset($map['WhiteVersionList'])) {
            $model->whiteVersionList = $map['WhiteVersionList'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RestartAppType'])) {
            $model->restartAppType = $map['RestartAppType'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['BlackVersionList'])) {
            $model->blackVersionList = $map['BlackVersionList'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Adapters'])) {
            if (!empty($map['Adapters'])) {
                $model->adapters = [];
                $n               = 0;
                foreach ($map['Adapters'] as $item) {
                    $model->adapters[$n++] = null !== $item ? adapters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsSilentUpgrade'])) {
            $model->isSilentUpgrade = $map['IsSilentUpgrade'];
        }
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['IsNeedRestart'])) {
            $model->isNeedRestart = $map['IsNeedRestart'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['RestartType'])) {
            $model->restartType = $map['RestartType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OriginalUrl'])) {
            $model->originalUrl = $map['OriginalUrl'];
        }

        return $model;
    }
}
