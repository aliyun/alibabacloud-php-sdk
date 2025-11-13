<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVersionConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $agentlessCapacity;

    /**
     * @var int
     */
    public $allowPartialBuy;

    /**
     * @var int
     */
    public $antiRansomwareCapacity;

    /**
     * @var int
     */
    public $antiRansomwareService;

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
    public $canTryPostPaidPackage;

    /**
     * @var int
     */
    public $cspmCapacity;

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
     * @var int
     */
    public $instanceBuyType;

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
     * @var bool
     */
    public $isPostpay;

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
    public $mergedVersion;

    /**
     * @var string
     */
    public $multiVersion;

    /**
     * @var int
     */
    public $newThreatAnalysis;

    /**
     * @var int
     */
    public $openTime;

    /**
     * @var int
     */
    public $postPayHostVersion;

    /**
     * @var string
     */
    public $postPayInstanceId;

    /**
     * @var string
     */
    public $postPayModuleSwitch;

    /**
     * @var int
     */
    public $postPayOpenTime;

    /**
     * @var int
     */
    public $postPayStatus;

    /**
     * @var int
     */
    public $raspCapacity;

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
    public $sdkCapacity;

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
    public $threatAnalysisFlow;

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
    public $vulFixCapacity;

    /**
     * @var int
     */
    public $webLock;

    /**
     * @var int
     */
    public $webLockAuthCount;
    protected $_name = [
        'agentlessCapacity' => 'AgentlessCapacity',
        'allowPartialBuy' => 'AllowPartialBuy',
        'antiRansomwareCapacity' => 'AntiRansomwareCapacity',
        'antiRansomwareService' => 'AntiRansomwareService',
        'appWhiteList' => 'AppWhiteList',
        'appWhiteListAuthCount' => 'AppWhiteListAuthCount',
        'assetLevel' => 'AssetLevel',
        'canTryPostPaidPackage' => 'CanTryPostPaidPackage',
        'cspmCapacity' => 'CspmCapacity',
        'highestVersion' => 'HighestVersion',
        'honeypotCapacity' => 'HoneypotCapacity',
        'imageScanCapacity' => 'ImageScanCapacity',
        'instanceBuyType' => 'InstanceBuyType',
        'instanceId' => 'InstanceId',
        'isNewContainerVersion' => 'IsNewContainerVersion',
        'isNewMultiVersion' => 'IsNewMultiVersion',
        'isOverBalance' => 'IsOverBalance',
        'isPostpay' => 'IsPostpay',
        'isTrialVersion' => 'IsTrialVersion',
        'lastTrailEndTime' => 'LastTrailEndTime',
        'MVAuthCount' => 'MVAuthCount',
        'MVUnusedAuthCount' => 'MVUnusedAuthCount',
        'mergedVersion' => 'MergedVersion',
        'multiVersion' => 'MultiVersion',
        'newThreatAnalysis' => 'NewThreatAnalysis',
        'openTime' => 'OpenTime',
        'postPayHostVersion' => 'PostPayHostVersion',
        'postPayInstanceId' => 'PostPayInstanceId',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
        'postPayOpenTime' => 'PostPayOpenTime',
        'postPayStatus' => 'PostPayStatus',
        'raspCapacity' => 'RaspCapacity',
        'releaseTime' => 'ReleaseTime',
        'requestId' => 'RequestId',
        'sasLog' => 'SasLog',
        'sasScreen' => 'SasScreen',
        'sdkCapacity' => 'SdkCapacity',
        'slsCapacity' => 'SlsCapacity',
        'threatAnalysisCapacity' => 'ThreatAnalysisCapacity',
        'threatAnalysisFlow' => 'ThreatAnalysisFlow',
        'userDefinedAlarms' => 'UserDefinedAlarms',
        'version' => 'Version',
        'vmCores' => 'VmCores',
        'vulFixCapacity' => 'VulFixCapacity',
        'webLock' => 'WebLock',
        'webLockAuthCount' => 'WebLockAuthCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentlessCapacity) {
            $res['AgentlessCapacity'] = $this->agentlessCapacity;
        }

        if (null !== $this->allowPartialBuy) {
            $res['AllowPartialBuy'] = $this->allowPartialBuy;
        }

        if (null !== $this->antiRansomwareCapacity) {
            $res['AntiRansomwareCapacity'] = $this->antiRansomwareCapacity;
        }

        if (null !== $this->antiRansomwareService) {
            $res['AntiRansomwareService'] = $this->antiRansomwareService;
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

        if (null !== $this->canTryPostPaidPackage) {
            $res['CanTryPostPaidPackage'] = $this->canTryPostPaidPackage;
        }

        if (null !== $this->cspmCapacity) {
            $res['CspmCapacity'] = $this->cspmCapacity;
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

        if (null !== $this->instanceBuyType) {
            $res['InstanceBuyType'] = $this->instanceBuyType;
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

        if (null !== $this->isPostpay) {
            $res['IsPostpay'] = $this->isPostpay;
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

        if (null !== $this->mergedVersion) {
            $res['MergedVersion'] = $this->mergedVersion;
        }

        if (null !== $this->multiVersion) {
            $res['MultiVersion'] = $this->multiVersion;
        }

        if (null !== $this->newThreatAnalysis) {
            $res['NewThreatAnalysis'] = $this->newThreatAnalysis;
        }

        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }

        if (null !== $this->postPayHostVersion) {
            $res['PostPayHostVersion'] = $this->postPayHostVersion;
        }

        if (null !== $this->postPayInstanceId) {
            $res['PostPayInstanceId'] = $this->postPayInstanceId;
        }

        if (null !== $this->postPayModuleSwitch) {
            $res['PostPayModuleSwitch'] = $this->postPayModuleSwitch;
        }

        if (null !== $this->postPayOpenTime) {
            $res['PostPayOpenTime'] = $this->postPayOpenTime;
        }

        if (null !== $this->postPayStatus) {
            $res['PostPayStatus'] = $this->postPayStatus;
        }

        if (null !== $this->raspCapacity) {
            $res['RaspCapacity'] = $this->raspCapacity;
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

        if (null !== $this->sdkCapacity) {
            $res['SdkCapacity'] = $this->sdkCapacity;
        }

        if (null !== $this->slsCapacity) {
            $res['SlsCapacity'] = $this->slsCapacity;
        }

        if (null !== $this->threatAnalysisCapacity) {
            $res['ThreatAnalysisCapacity'] = $this->threatAnalysisCapacity;
        }

        if (null !== $this->threatAnalysisFlow) {
            $res['ThreatAnalysisFlow'] = $this->threatAnalysisFlow;
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

        if (null !== $this->vulFixCapacity) {
            $res['VulFixCapacity'] = $this->vulFixCapacity;
        }

        if (null !== $this->webLock) {
            $res['WebLock'] = $this->webLock;
        }

        if (null !== $this->webLockAuthCount) {
            $res['WebLockAuthCount'] = $this->webLockAuthCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentlessCapacity'])) {
            $model->agentlessCapacity = $map['AgentlessCapacity'];
        }

        if (isset($map['AllowPartialBuy'])) {
            $model->allowPartialBuy = $map['AllowPartialBuy'];
        }

        if (isset($map['AntiRansomwareCapacity'])) {
            $model->antiRansomwareCapacity = $map['AntiRansomwareCapacity'];
        }

        if (isset($map['AntiRansomwareService'])) {
            $model->antiRansomwareService = $map['AntiRansomwareService'];
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

        if (isset($map['CanTryPostPaidPackage'])) {
            $model->canTryPostPaidPackage = $map['CanTryPostPaidPackage'];
        }

        if (isset($map['CspmCapacity'])) {
            $model->cspmCapacity = $map['CspmCapacity'];
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

        if (isset($map['InstanceBuyType'])) {
            $model->instanceBuyType = $map['InstanceBuyType'];
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

        if (isset($map['IsPostpay'])) {
            $model->isPostpay = $map['IsPostpay'];
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

        if (isset($map['MergedVersion'])) {
            $model->mergedVersion = $map['MergedVersion'];
        }

        if (isset($map['MultiVersion'])) {
            $model->multiVersion = $map['MultiVersion'];
        }

        if (isset($map['NewThreatAnalysis'])) {
            $model->newThreatAnalysis = $map['NewThreatAnalysis'];
        }

        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        if (isset($map['PostPayHostVersion'])) {
            $model->postPayHostVersion = $map['PostPayHostVersion'];
        }

        if (isset($map['PostPayInstanceId'])) {
            $model->postPayInstanceId = $map['PostPayInstanceId'];
        }

        if (isset($map['PostPayModuleSwitch'])) {
            $model->postPayModuleSwitch = $map['PostPayModuleSwitch'];
        }

        if (isset($map['PostPayOpenTime'])) {
            $model->postPayOpenTime = $map['PostPayOpenTime'];
        }

        if (isset($map['PostPayStatus'])) {
            $model->postPayStatus = $map['PostPayStatus'];
        }

        if (isset($map['RaspCapacity'])) {
            $model->raspCapacity = $map['RaspCapacity'];
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

        if (isset($map['SdkCapacity'])) {
            $model->sdkCapacity = $map['SdkCapacity'];
        }

        if (isset($map['SlsCapacity'])) {
            $model->slsCapacity = $map['SlsCapacity'];
        }

        if (isset($map['ThreatAnalysisCapacity'])) {
            $model->threatAnalysisCapacity = $map['ThreatAnalysisCapacity'];
        }

        if (isset($map['ThreatAnalysisFlow'])) {
            $model->threatAnalysisFlow = $map['ThreatAnalysisFlow'];
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

        if (isset($map['VulFixCapacity'])) {
            $model->vulFixCapacity = $map['VulFixCapacity'];
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
