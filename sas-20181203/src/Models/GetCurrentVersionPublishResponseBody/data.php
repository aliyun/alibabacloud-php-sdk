<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCurrentVersionPublishResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether automatic upgrade is enabled. Valid values:
     *
     *   **1**: yes.
     *   **0**: no.
     *
     * @example 1
     *
     * @var int
     */
    public $autoUpgrade;

    /**
     * @description Indicates whether you can enable custom upgrade for the Security Center agent. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $bigCustomer;

    /**
     * @description The version of the Security Center agent.
     *
     * @example 0.0.8
     *
     * @var string
     */
    public $curVersion;

    /**
     * @description The timestamp when the Security Center agent was forcibly upgraded.
     *
     * @example 1732506308000
     *
     * @var int
     */
    public $forceUpgradeTime;

    /**
     * @description Indicates whether the canary release policy is enabled. Valid values:
     *
     *   **1**: yes.
     *   .**0**: no.
     *
     * @example 1
     *
     * @var int
     */
    public $graySwitchStatus;

    /**
     * @description The latest version of the Security Center agent.
     *
     * @example 0.0.9
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @description The timestamp when the latest version of the Security Center agent was created.
     *
     * @example 1662639150000
     *
     * @var int
     */
    public $latestVersionCreate;

    /**
     * @description The description of about the latest version.
     *
     * @example test
     *
     * @var string
     */
    public $latestVersionDesc;

    /**
     * @description The publish status of the Security Center agent. Valid values:
     *
     *   **0**: not started.
     *   **1**: publishing.
     *   **2**: published.
     *   **3**: publish suspended.
     *   **4**: forcibly upgrading.
     *
     * @example 1
     *
     * @var int
     */
    public $publishStatus;

    /**
     * @description The destination version of the Security Center agent.
     *
     * @example 0.0.9
     *
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'autoUpgrade' => 'AutoUpgrade',
        'bigCustomer' => 'BigCustomer',
        'curVersion' => 'CurVersion',
        'forceUpgradeTime' => 'ForceUpgradeTime',
        'graySwitchStatus' => 'GraySwitchStatus',
        'latestVersion' => 'LatestVersion',
        'latestVersionCreate' => 'LatestVersionCreate',
        'latestVersionDesc' => 'LatestVersionDesc',
        'publishStatus' => 'PublishStatus',
        'upgradeVersion' => 'UpgradeVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgrade) {
            $res['AutoUpgrade'] = $this->autoUpgrade;
        }
        if (null !== $this->bigCustomer) {
            $res['BigCustomer'] = $this->bigCustomer;
        }
        if (null !== $this->curVersion) {
            $res['CurVersion'] = $this->curVersion;
        }
        if (null !== $this->forceUpgradeTime) {
            $res['ForceUpgradeTime'] = $this->forceUpgradeTime;
        }
        if (null !== $this->graySwitchStatus) {
            $res['GraySwitchStatus'] = $this->graySwitchStatus;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->latestVersionCreate) {
            $res['LatestVersionCreate'] = $this->latestVersionCreate;
        }
        if (null !== $this->latestVersionDesc) {
            $res['LatestVersionDesc'] = $this->latestVersionDesc;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpgrade'])) {
            $model->autoUpgrade = $map['AutoUpgrade'];
        }
        if (isset($map['BigCustomer'])) {
            $model->bigCustomer = $map['BigCustomer'];
        }
        if (isset($map['CurVersion'])) {
            $model->curVersion = $map['CurVersion'];
        }
        if (isset($map['ForceUpgradeTime'])) {
            $model->forceUpgradeTime = $map['ForceUpgradeTime'];
        }
        if (isset($map['GraySwitchStatus'])) {
            $model->graySwitchStatus = $map['GraySwitchStatus'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['LatestVersionCreate'])) {
            $model->latestVersionCreate = $map['LatestVersionCreate'];
        }
        if (isset($map['LatestVersionDesc'])) {
            $model->latestVersionDesc = $map['LatestVersionDesc'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }

        return $model;
    }
}
