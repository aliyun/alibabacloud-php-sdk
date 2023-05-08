<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVersionConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the pay-as-you-go billing method is supported.
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allowPartialBuy;

    /**
     * @description Indicates whether the application whitelist feature is enabled. Valid values:
     *
     *   **0**: no
     *   **2**: yes
     *
     * @example 2
     *
     * @var int
     */
    public $appWhiteList;

    /**
     * @description The quota for the application whitelist feature.
     *
     * > The quantity of servers that are allowed by the quota is deducted by one each time you apply an application whitelist to a server. After you enable the application whitelist feature, the quota is 20 by default.
     * @example 20
     *
     * @var int
     */
    public $appWhiteListAuthCount;

    /**
     * @description The quota for servers that can be protected.
     *
     * @example 30
     *
     * @var int
     */
    public $assetLevel;

    /**
     * @description The most advanced edition that is used. Valid values:
     *
     *   **1**: Basic edition
     *   **3**: Enterprise edition
     *   **5**: Advanced edition
     *   **6**: Anti-virus edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * > If you purchase the Multi-version edition of Security Center, the value indicates the most advanced edition that is used in the Multi-version edition. If you do not purchase the Multi-version edition of Security Center, the value indicates the edition of Security Center.
     * @example 1
     *
     * @var int
     */
    public $highestVersion;

    /**
     * @description The number of honeypots.
     *
     * @example 20
     *
     * @var int
     */
    public $honeypotCapacity;

    /**
     * @description The quota for the container image scan feature.
     *
     * @example 8954
     *
     * @var int
     */
    public $imageScanCapacity;

    /**
     * @description The ID of purchased Security Center.
     *
     * @example sas-vg6hafdsafs****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether Security Center runs the latest version of the Ultimate edition.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $isNewContainerVersion;

    /**
     * @description Indicates whether Security Center runs the latest version of the Multi-version edition.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $isNewMultiVersion;

    /**
     * @description Indicates whether the number of existing servers exceeds the purchased quota. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * @example false
     *
     * @var bool
     */
    public $isOverBalance;

    /**
     * @description Indicates whether Security Center runs the free trial edition. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $isTrialVersion;

    /**
     * @description The timestamp when the last trial ends. Unit: milliseconds.
     *
     * @example 1603934844000
     *
     * @var int
     */
    public $lastTrailEndTime;

    /**
     * @description The total quota in the Multi-version edition of purchased Security Center.
     *
     * @example 5000
     *
     * @var int
     */
    public $MVAuthCount;

    /**
     * @description The total remaining quota in the Multi-version edition of purchased Security Center.
     *
     * @example 40
     *
     * @var int
     */
    public $MVUnusedAuthCount;

    /**
     * @description The timestamp when Security Center is purchased. Unit: milliseconds.
     *
     * @example 1657244824669
     *
     * @var int
     */
    public $openTime;

    /**
     * @description The timestamp when Security Center is released. Unit: milliseconds. The value of this parameter is seven days after Security Center expires.
     *
     * > If you do not renew the subscription within seven days after the expiration date, the Value-added Plan, Anti-virus, Advanced, or Enterprise edition is downgraded to the Basic edition. In this case, you can no longer view the existing configurations or statistics such as DDoS alerts. You must purchase the Anti-virus, Advanced, or Enterprise edition to continue using relevant features. For more information, see [Purchase Security Center](~~42308~~).
     * @example 1625846400000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The request ID.
     *
     * @example C2DC96D2-DD2E-49D9-A28E-85590475DF55
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the log analysis feature is purchased. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $sasLog;

    /**
     * @description Indicates whether the security screen feature is purchased. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $sasScreen;

    /**
     * @description The log storage capacity that you purchase. Unit: GB. Valid values: 0 to 200000.
     *
     * @example 10240
     *
     * @var int
     */
    public $slsCapacity;

    /**
     * @description The purchased log storage capacity for threat analysis. Unit: GB.
     *
     * @example 25
     *
     * @var int
     */
    public $threatAnalysisCapacity;

    /**
     * @description Indicates whether the custom alerting feature is enabled. Valid values:
     *
     *   **0**: no
     *   **2**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $userDefinedAlarms;

    /**
     * @description The edition of purchased Security Center. Valid values:
     *
     *   **1**: Basic edition
     *   **3**: Enterprise edition
     *   **5**: Advanced edition
     *   **6**: Anti-virus edition
     *   **7**: Ultimate edition
     *   **8**: Multi-version edition
     *   **10**: Value-added Plan edition
     *
     * @example 3
     *
     * @var int
     */
    public $version;

    /**
     * @description The quota for the cores of servers that can be protected.
     *
     * @example 10
     *
     * @var int
     */
    public $vmCores;

    /**
     * @description Indicates whether the web tamper proofing feature is enabled. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $webLock;

    /**
     * @description The quota for the web tamper proofing feature. The quantity of servers that are allowed by the quota is deducted by one each time you enable the web tamper proofing feature for a server. Valid values: 0 to N.
     *
     * > N indicates the number of servers that you own.
     * @example 0
     *
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
