<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindAppVersionsResponseBody\appVersionList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $isAllowNewInstall;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $restartAppParam;

    /**
     * @var string
     */
    public $isSilentUpgrade;

    /**
     * @var string
     */
    public $appPackageName;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;

    /**
     * @var string
     */
    public $appName;

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
    public $restartAppType;

    /**
     * @var string
     */
    public $appId;

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
    public $appVersion;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'             => 'Status',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModify'          => 'GmtModify',
        'isAllowNewInstall'  => 'IsAllowNewInstall',
        'statusName'         => 'StatusName',
        'restartAppParam'    => 'RestartAppParam',
        'isSilentUpgrade'    => 'IsSilentUpgrade',
        'appPackageName'     => 'AppPackageName',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
        'appName'            => 'AppName',
        'installType'        => 'InstallType',
        'isNeedRestart'      => 'IsNeedRestart',
        'restartAppType'     => 'RestartAppType',
        'appId'              => 'AppId',
        'restartType'        => 'RestartType',
        'gmtCreate'          => 'GmtCreate',
        'appVersion'         => 'AppVersion',
        'versionCode'        => 'VersionCode',
        'isForceUpgrade'     => 'IsForceUpgrade',
        'id'                 => 'Id',
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
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->isAllowNewInstall) {
            $res['IsAllowNewInstall'] = $this->isAllowNewInstall;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->restartAppParam) {
            $res['RestartAppParam'] = $this->restartAppParam;
        }
        if (null !== $this->isSilentUpgrade) {
            $res['IsSilentUpgrade'] = $this->isSilentUpgrade;
        }
        if (null !== $this->appPackageName) {
            $res['AppPackageName'] = $this->appPackageName;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->isNeedRestart) {
            $res['IsNeedRestart'] = $this->isNeedRestart;
        }
        if (null !== $this->restartAppType) {
            $res['RestartAppType'] = $this->restartAppType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->restartType) {
            $res['RestartType'] = $this->restartType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['IsAllowNewInstall'])) {
            $model->isAllowNewInstall = $map['IsAllowNewInstall'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['RestartAppParam'])) {
            $model->restartAppParam = $map['RestartAppParam'];
        }
        if (isset($map['IsSilentUpgrade'])) {
            $model->isSilentUpgrade = $map['IsSilentUpgrade'];
        }
        if (isset($map['AppPackageName'])) {
            $model->appPackageName = $map['AppPackageName'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['IsNeedRestart'])) {
            $model->isNeedRestart = $map['IsNeedRestart'];
        }
        if (isset($map['RestartAppType'])) {
            $model->restartAppType = $map['RestartAppType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RestartType'])) {
            $model->restartType = $map['RestartType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
