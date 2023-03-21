<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVersionConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $allowPartialBuy;

    /**
     * @var int
     */
    public $appWhiteList;

    /**
     * @var int
     */
    public $appWhiteListAuthCount;

    /**
     * @var int
     */
    public $assetLevel;

    /**
     * @var int
     */
    public $highestVersion;

    /**
     * @var int
     */
    public $honeypotCapacity;

    /**
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isNewContainerVersion;

    /**
     * @var bool
     */
    public $isNewMultiVersion;

    /**
     * @var bool
     */
    public $isOverBalance;

    /**
     * @var int
     */
    public $isTrialVersion;

    /**
     * @var int
     */
    public $lastTrailEndTime;

    /**
     * @var int
     */
    public $MVAuthCount;

    /**
     * @var int
     */
    public $MVUnusedAuthCount;

    /**
     * @var int
     */
    public $openTime;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sasLog;

    /**
     * @var int
     */
    public $sasScreen;

    /**
     * @var int
     */
    public $slsCapacity;

    /**
     * @var int
     */
    public $threatAnalysisCapacity;

    /**
     * @var int
     */
    public $userDefinedAlarms;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $vmCores;

    /**
     * @var int
     */
    public $webLock;

    /**
     * @var int
     */
    public $webLockAuthCount;
    protected $_name = [
        'allowPartialBuy'        => 'AllowPartialBuy',
        'appWhiteList'           => 'AppWhiteList',
        'appWhiteListAuthCount'  => 'AppWhiteListAuthCount',
        'assetLevel'             => 'AssetLevel',
        'highestVersion'         => 'HighestVersion',
        'honeypotCapacity'       => 'HoneypotCapacity',
        'imageScanCapacity'      => 'ImageScanCapacity',
        'instanceId'             => 'InstanceId',
        'isNewContainerVersion'  => 'IsNewContainerVersion',
        'isNewMultiVersion'      => 'IsNewMultiVersion',
        'isOverBalance'          => 'IsOverBalance',
        'isTrialVersion'         => 'IsTrialVersion',
        'lastTrailEndTime'       => 'LastTrailEndTime',
        'MVAuthCount'            => 'MVAuthCount',
        'MVUnusedAuthCount'      => 'MVUnusedAuthCount',
        'openTime'               => 'OpenTime',
        'releaseTime'            => 'ReleaseTime',
        'requestId'              => 'RequestId',
        'sasLog'                 => 'SasLog',
        'sasScreen'              => 'SasScreen',
        'slsCapacity'            => 'SlsCapacity',
        'threatAnalysisCapacity' => 'ThreatAnalysisCapacity',
        'userDefinedAlarms'      => 'UserDefinedAlarms',
        'version'                => 'Version',
        'vmCores'                => 'VmCores',
        'webLock'                => 'WebLock',
        'webLockAuthCount'       => 'WebLockAuthCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowPartialBuy) {
            $res['AllowPartialBuy'] = $this->allowPartialBuy;
        }
        if (null !== $this->appWhiteList) {
            $res['AppWhiteList'] = $this->appWhiteList;
        }
        if (null !== $this->appWhiteListAuthCount) {
            $res['AppWhiteListAuthCount'] = $this->appWhiteListAuthCount;
        }
        if (null !== $this->assetLevel) {
            $res['AssetLevel'] = $this->assetLevel;
        }
        if (null !== $this->highestVersion) {
            $res['HighestVersion'] = $this->highestVersion;
        }
        if (null !== $this->honeypotCapacity) {
            $res['HoneypotCapacity'] = $this->honeypotCapacity;
        }
        if (null !== $this->imageScanCapacity) {
            $res['ImageScanCapacity'] = $this->imageScanCapacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isNewContainerVersion) {
            $res['IsNewContainerVersion'] = $this->isNewContainerVersion;
        }
        if (null !== $this->isNewMultiVersion) {
            $res['IsNewMultiVersion'] = $this->isNewMultiVersion;
        }
        if (null !== $this->isOverBalance) {
            $res['IsOverBalance'] = $this->isOverBalance;
        }
        if (null !== $this->isTrialVersion) {
            $res['IsTrialVersion'] = $this->isTrialVersion;
        }
        if (null !== $this->lastTrailEndTime) {
            $res['LastTrailEndTime'] = $this->lastTrailEndTime;
        }
        if (null !== $this->MVAuthCount) {
            $res['MVAuthCount'] = $this->MVAuthCount;
        }
        if (null !== $this->MVUnusedAuthCount) {
            $res['MVUnusedAuthCount'] = $this->MVUnusedAuthCount;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasLog) {
            $res['SasLog'] = $this->sasLog;
        }
        if (null !== $this->sasScreen) {
            $res['SasScreen'] = $this->sasScreen;
        }
        if (null !== $this->slsCapacity) {
            $res['SlsCapacity'] = $this->slsCapacity;
        }
        if (null !== $this->threatAnalysisCapacity) {
            $res['ThreatAnalysisCapacity'] = $this->threatAnalysisCapacity;
        }
        if (null !== $this->userDefinedAlarms) {
            $res['UserDefinedAlarms'] = $this->userDefinedAlarms;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vmCores) {
            $res['VmCores'] = $this->vmCores;
        }
        if (null !== $this->webLock) {
            $res['WebLock'] = $this->webLock;
        }
        if (null !== $this->webLockAuthCount) {
            $res['WebLockAuthCount'] = $this->webLockAuthCount;
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
        if (isset($map['AllowPartialBuy'])) {
            $model->allowPartialBuy = $map['AllowPartialBuy'];
        }
        if (isset($map['AppWhiteList'])) {
            $model->appWhiteList = $map['AppWhiteList'];
        }
        if (isset($map['AppWhiteListAuthCount'])) {
            $model->appWhiteListAuthCount = $map['AppWhiteListAuthCount'];
        }
        if (isset($map['AssetLevel'])) {
            $model->assetLevel = $map['AssetLevel'];
        }
        if (isset($map['HighestVersion'])) {
            $model->highestVersion = $map['HighestVersion'];
        }
        if (isset($map['HoneypotCapacity'])) {
            $model->honeypotCapacity = $map['HoneypotCapacity'];
        }
        if (isset($map['ImageScanCapacity'])) {
            $model->imageScanCapacity = $map['ImageScanCapacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsNewContainerVersion'])) {
            $model->isNewContainerVersion = $map['IsNewContainerVersion'];
        }
        if (isset($map['IsNewMultiVersion'])) {
            $model->isNewMultiVersion = $map['IsNewMultiVersion'];
        }
        if (isset($map['IsOverBalance'])) {
            $model->isOverBalance = $map['IsOverBalance'];
        }
        if (isset($map['IsTrialVersion'])) {
            $model->isTrialVersion = $map['IsTrialVersion'];
        }
        if (isset($map['LastTrailEndTime'])) {
            $model->lastTrailEndTime = $map['LastTrailEndTime'];
        }
        if (isset($map['MVAuthCount'])) {
            $model->MVAuthCount = $map['MVAuthCount'];
        }
        if (isset($map['MVUnusedAuthCount'])) {
            $model->MVUnusedAuthCount = $map['MVUnusedAuthCount'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasLog'])) {
            $model->sasLog = $map['SasLog'];
        }
        if (isset($map['SasScreen'])) {
            $model->sasScreen = $map['SasScreen'];
        }
        if (isset($map['SlsCapacity'])) {
            $model->slsCapacity = $map['SlsCapacity'];
        }
        if (isset($map['ThreatAnalysisCapacity'])) {
            $model->threatAnalysisCapacity = $map['ThreatAnalysisCapacity'];
        }
        if (isset($map['UserDefinedAlarms'])) {
            $model->userDefinedAlarms = $map['UserDefinedAlarms'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VmCores'])) {
            $model->vmCores = $map['VmCores'];
        }
        if (isset($map['WebLock'])) {
            $model->webLock = $map['WebLock'];
        }
        if (isset($map['WebLockAuthCount'])) {
            $model->webLockAuthCount = $map['WebLockAuthCount'];
        }

        return $model;
    }
}
