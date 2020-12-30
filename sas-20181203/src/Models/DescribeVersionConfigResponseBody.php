<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVersionConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @var int
     */
    public $appWhiteListAuthCount;

    /**
     * @var int
     */
    public $sasLog;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $lastTrailEndTime;

    /**
     * @var int
     */
    public $webLockAuthCount;

    /**
     * @var int
     */
    public $slsCapacity;

    /**
     * @var int
     */
    public $userDefinedAlarms;

    /**
     * @var int
     */
    public $webLock;

    /**
     * @var bool
     */
    public $isOverBalance;

    /**
     * @var int
     */
    public $vmCores;

    /**
     * @var int
     */
    public $honeypotCapacity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $assetLevel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $sasScreen;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $isTrialVersion;

    /**
     * @var int
     */
    public $appWhiteList;
    protected $_name = [
        'imageScanCapacity'     => 'ImageScanCapacity',
        'appWhiteListAuthCount' => 'AppWhiteListAuthCount',
        'sasLog'                => 'SasLog',
        'version'               => 'Version',
        'lastTrailEndTime'      => 'LastTrailEndTime',
        'webLockAuthCount'      => 'WebLockAuthCount',
        'slsCapacity'           => 'SlsCapacity',
        'userDefinedAlarms'     => 'UserDefinedAlarms',
        'webLock'               => 'WebLock',
        'isOverBalance'         => 'IsOverBalance',
        'vmCores'               => 'VmCores',
        'honeypotCapacity'      => 'HoneypotCapacity',
        'requestId'             => 'RequestId',
        'assetLevel'            => 'AssetLevel',
        'instanceId'            => 'InstanceId',
        'sasScreen'             => 'SasScreen',
        'releaseTime'           => 'ReleaseTime',
        'isTrialVersion'        => 'IsTrialVersion',
        'appWhiteList'          => 'AppWhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }
        if (null !== $this->appWhiteListAuthCount) {
            $res['AppWhiteListAuthCount'] = $this->appWhiteListAuthCount;
        }
        if (null !== $this->sasLog) {
            $res['SasLog'] = $this->sasLog;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->lastTrailEndTime) {
            $res['LastTrailEndTime'] = $this->lastTrailEndTime;
        }
        if (null !== $this->webLockAuthCount) {
            $res['WebLockAuthCount'] = $this->webLockAuthCount;
        }
        if (null !== $this->slsCapacity) {
            $res['SlsCapacity'] = $this->slsCapacity;
        }
        if (null !== $this->userDefinedAlarms) {
            $res['UserDefinedAlarms'] = $this->userDefinedAlarms;
        }
        if (null !== $this->webLock) {
            $res['WebLock'] = $this->webLock;
        }
        if (null !== $this->isOverBalance) {
            $res['IsOverBalance'] = $this->isOverBalance;
        }
        if (null !== $this->vmCores) {
            $res['VmCores'] = $this->vmCores;
        }
        if (null !== $this->honeypotCapacity) {
            $res['HoneypotCapacity'] = $this->honeypotCapacity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->assetLevel) {
            $res['AssetLevel'] = $this->assetLevel;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sasScreen) {
            $res['SasScreen'] = $this->sasScreen;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->isTrialVersion) {
            $res['IsTrialVersion'] = $this->isTrialVersion;
        }
        if (null !== $this->appWhiteList) {
            $res['AppWhiteList'] = $this->appWhiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVersionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }
        if (isset($map['AppWhiteListAuthCount'])) {
            $model->appWhiteListAuthCount = $map['AppWhiteListAuthCount'];
        }
        if (isset($map['SasLog'])) {
            $model->sasLog = $map['SasLog'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['LastTrailEndTime'])) {
            $model->lastTrailEndTime = $map['LastTrailEndTime'];
        }
        if (isset($map['WebLockAuthCount'])) {
            $model->webLockAuthCount = $map['WebLockAuthCount'];
        }
        if (isset($map['SlsCapacity'])) {
            $model->slsCapacity = $map['SlsCapacity'];
        }
        if (isset($map['UserDefinedAlarms'])) {
            $model->userDefinedAlarms = $map['UserDefinedAlarms'];
        }
        if (isset($map['WebLock'])) {
            $model->webLock = $map['WebLock'];
        }
        if (isset($map['IsOverBalance'])) {
            $model->isOverBalance = $map['IsOverBalance'];
        }
        if (isset($map['VmCores'])) {
            $model->vmCores = $map['VmCores'];
        }
        if (isset($map['HoneypotCapacity'])) {
            $model->honeypotCapacity = $map['HoneypotCapacity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssetLevel'])) {
            $model->assetLevel = $map['AssetLevel'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SasScreen'])) {
            $model->sasScreen = $map['SasScreen'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['IsTrialVersion'])) {
            $model->isTrialVersion = $map['IsTrialVersion'];
        }
        if (isset($map['AppWhiteList'])) {
            $model->appWhiteList = $map['AppWhiteList'];
        }

        return $model;
    }
}
