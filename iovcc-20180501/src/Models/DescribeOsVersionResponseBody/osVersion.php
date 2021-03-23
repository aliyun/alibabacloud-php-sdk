<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody\osVersion\nightUpgradeOption;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody\osVersion\romList;
use AlibabaCloud\Tea\Model;

class osVersion extends Model
{
    /**
     * @var int
     */
    public $id;

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
    public $status;

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
    public $minClientVersion;

    /**
     * @var string
     */
    public $maxClientVersion;

    /**
     * @var string
     */
    public $isMilestone;

    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var string
     */
    public $isForceNightUpgrade;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $deviceModelName;

    /**
     * @var string
     */
    public $enableMobileDownload;

    /**
     * @var string
     */
    public $mobileDownloadMaxSize;

    /**
     * @var romList[]
     */
    public $romList;

    /**
     * @var nightUpgradeOption
     */
    public $nightUpgradeOption;
    protected $_name = [
        'id'                    => 'Id',
        'deviceModelId'         => 'DeviceModelId',
        'systemVersion'         => 'SystemVersion',
        'releaseNote'           => 'ReleaseNote',
        'remark'                => 'Remark',
        'status'                => 'Status',
        'blackVersionList'      => 'BlackVersionList',
        'whiteVersionList'      => 'WhiteVersionList',
        'minClientVersion'      => 'MinClientVersion',
        'maxClientVersion'      => 'MaxClientVersion',
        'isMilestone'           => 'IsMilestone',
        'isForceUpgrade'        => 'IsForceUpgrade',
        'isForceNightUpgrade'   => 'IsForceNightUpgrade',
        'gmtCreate'             => 'GmtCreate',
        'gmtModify'             => 'GmtModify',
        'statusName'            => 'StatusName',
        'deviceModelName'       => 'DeviceModelName',
        'enableMobileDownload'  => 'EnableMobileDownload',
        'mobileDownloadMaxSize' => 'MobileDownloadMaxSize',
        'romList'               => 'RomList',
        'nightUpgradeOption'    => 'NightUpgradeOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->blackVersionList) {
            $res['BlackVersionList'] = $this->blackVersionList;
        }
        if (null !== $this->whiteVersionList) {
            $res['WhiteVersionList'] = $this->whiteVersionList;
        }
        if (null !== $this->minClientVersion) {
            $res['MinClientVersion'] = $this->minClientVersion;
        }
        if (null !== $this->maxClientVersion) {
            $res['MaxClientVersion'] = $this->maxClientVersion;
        }
        if (null !== $this->isMilestone) {
            $res['IsMilestone'] = $this->isMilestone;
        }
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->isForceNightUpgrade) {
            $res['IsForceNightUpgrade'] = $this->isForceNightUpgrade;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->deviceModelName) {
            $res['DeviceModelName'] = $this->deviceModelName;
        }
        if (null !== $this->enableMobileDownload) {
            $res['EnableMobileDownload'] = $this->enableMobileDownload;
        }
        if (null !== $this->mobileDownloadMaxSize) {
            $res['MobileDownloadMaxSize'] = $this->mobileDownloadMaxSize;
        }
        if (null !== $this->romList) {
            $res['RomList'] = [];
            if (null !== $this->romList && \is_array($this->romList)) {
                $n = 0;
                foreach ($this->romList as $item) {
                    $res['RomList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nightUpgradeOption) {
            $res['NightUpgradeOption'] = null !== $this->nightUpgradeOption ? $this->nightUpgradeOption->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BlackVersionList'])) {
            $model->blackVersionList = $map['BlackVersionList'];
        }
        if (isset($map['WhiteVersionList'])) {
            $model->whiteVersionList = $map['WhiteVersionList'];
        }
        if (isset($map['MinClientVersion'])) {
            $model->minClientVersion = $map['MinClientVersion'];
        }
        if (isset($map['MaxClientVersion'])) {
            $model->maxClientVersion = $map['MaxClientVersion'];
        }
        if (isset($map['IsMilestone'])) {
            $model->isMilestone = $map['IsMilestone'];
        }
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['IsForceNightUpgrade'])) {
            $model->isForceNightUpgrade = $map['IsForceNightUpgrade'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['DeviceModelName'])) {
            $model->deviceModelName = $map['DeviceModelName'];
        }
        if (isset($map['EnableMobileDownload'])) {
            $model->enableMobileDownload = $map['EnableMobileDownload'];
        }
        if (isset($map['MobileDownloadMaxSize'])) {
            $model->mobileDownloadMaxSize = $map['MobileDownloadMaxSize'];
        }
        if (isset($map['RomList'])) {
            if (!empty($map['RomList'])) {
                $model->romList = [];
                $n              = 0;
                foreach ($map['RomList'] as $item) {
                    $model->romList[$n++] = null !== $item ? romList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NightUpgradeOption'])) {
            $model->nightUpgradeOption = nightUpgradeOption::fromMap($map['NightUpgradeOption']);
        }

        return $model;
    }
}
