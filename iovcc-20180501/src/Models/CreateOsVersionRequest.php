<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateOsVersionRequest extends Model
{
    /**
     * @var string
     */
    public $isForceNightUpgrade;

    /**
     * @var string
     */
    public $maxClientVersion;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $blackVersionList;

    /**
     * @var string
     */
    public $isMilestone;

    /**
     * @var string
     */
    public $minClientVersion;

    /**
     * @var string
     */
    public $whiteVersionList;

    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var string
     */
    public $nightUpgradeDownloadType;

    /**
     * @var string
     */
    public $nightUpgradeIsShowTip;

    /**
     * @var string
     */
    public $nightUpgradeIsAllowedCancel;

    /**
     * @var string
     */
    public $romList;

    /**
     * @var string
     */
    public $enableMobileDownload;

    /**
     * @var string
     */
    public $mobileDownloadMaxSize;
    protected $_name = [
        'isForceNightUpgrade'         => 'IsForceNightUpgrade',
        'maxClientVersion'            => 'MaxClientVersion',
        'projectId'                   => 'ProjectId',
        'deviceModelId'               => 'DeviceModelId',
        'systemVersion'               => 'SystemVersion',
        'releaseNote'                 => 'ReleaseNote',
        'remark'                      => 'Remark',
        'blackVersionList'            => 'BlackVersionList',
        'isMilestone'                 => 'IsMilestone',
        'minClientVersion'            => 'MinClientVersion',
        'whiteVersionList'            => 'WhiteVersionList',
        'isForceUpgrade'              => 'IsForceUpgrade',
        'nightUpgradeDownloadType'    => 'NightUpgradeDownloadType',
        'nightUpgradeIsShowTip'       => 'NightUpgradeIsShowTip',
        'nightUpgradeIsAllowedCancel' => 'NightUpgradeIsAllowedCancel',
        'romList'                     => 'RomList',
        'enableMobileDownload'        => 'EnableMobileDownload',
        'mobileDownloadMaxSize'       => 'MobileDownloadMaxSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isForceNightUpgrade) {
            $res['IsForceNightUpgrade'] = $this->isForceNightUpgrade;
        }
        if (null !== $this->maxClientVersion) {
            $res['MaxClientVersion'] = $this->maxClientVersion;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->blackVersionList) {
            $res['BlackVersionList'] = $this->blackVersionList;
        }
        if (null !== $this->isMilestone) {
            $res['IsMilestone'] = $this->isMilestone;
        }
        if (null !== $this->minClientVersion) {
            $res['MinClientVersion'] = $this->minClientVersion;
        }
        if (null !== $this->whiteVersionList) {
            $res['WhiteVersionList'] = $this->whiteVersionList;
        }
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->nightUpgradeDownloadType) {
            $res['NightUpgradeDownloadType'] = $this->nightUpgradeDownloadType;
        }
        if (null !== $this->nightUpgradeIsShowTip) {
            $res['NightUpgradeIsShowTip'] = $this->nightUpgradeIsShowTip;
        }
        if (null !== $this->nightUpgradeIsAllowedCancel) {
            $res['NightUpgradeIsAllowedCancel'] = $this->nightUpgradeIsAllowedCancel;
        }
        if (null !== $this->romList) {
            $res['RomList'] = $this->romList;
        }
        if (null !== $this->enableMobileDownload) {
            $res['EnableMobileDownload'] = $this->enableMobileDownload;
        }
        if (null !== $this->mobileDownloadMaxSize) {
            $res['MobileDownloadMaxSize'] = $this->mobileDownloadMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOsVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsForceNightUpgrade'])) {
            $model->isForceNightUpgrade = $map['IsForceNightUpgrade'];
        }
        if (isset($map['MaxClientVersion'])) {
            $model->maxClientVersion = $map['MaxClientVersion'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['BlackVersionList'])) {
            $model->blackVersionList = $map['BlackVersionList'];
        }
        if (isset($map['IsMilestone'])) {
            $model->isMilestone = $map['IsMilestone'];
        }
        if (isset($map['MinClientVersion'])) {
            $model->minClientVersion = $map['MinClientVersion'];
        }
        if (isset($map['WhiteVersionList'])) {
            $model->whiteVersionList = $map['WhiteVersionList'];
        }
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['NightUpgradeDownloadType'])) {
            $model->nightUpgradeDownloadType = $map['NightUpgradeDownloadType'];
        }
        if (isset($map['NightUpgradeIsShowTip'])) {
            $model->nightUpgradeIsShowTip = $map['NightUpgradeIsShowTip'];
        }
        if (isset($map['NightUpgradeIsAllowedCancel'])) {
            $model->nightUpgradeIsAllowedCancel = $map['NightUpgradeIsAllowedCancel'];
        }
        if (isset($map['RomList'])) {
            $model->romList = $map['RomList'];
        }
        if (isset($map['EnableMobileDownload'])) {
            $model->enableMobileDownload = $map['EnableMobileDownload'];
        }
        if (isset($map['MobileDownloadMaxSize'])) {
            $model->mobileDownloadMaxSize = $map['MobileDownloadMaxSize'];
        }

        return $model;
    }
}
