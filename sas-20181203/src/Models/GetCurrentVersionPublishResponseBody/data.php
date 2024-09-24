<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCurrentVersionPublishResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoUpgrade;

    /**
     * @example true
     *
     * @var bool
     */
    public $bigCustomer;

    /**
     * @example 0.0.8
     *
     * @var string
     */
    public $curVersion;

    /**
     * @example 1732506308000
     *
     * @var int
     */
    public $forceUpgradeTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $graySwitchStatus;

    /**
     * @example 0.0.9
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @example 1662639150000
     *
     * @var int
     */
    public $latestVersionCreate;

    /**
     * @example test
     *
     * @var string
     */
    public $latestVersionDesc;

    /**
     * @example 1
     *
     * @var int
     */
    public $publishStatus;

    /**
     * @example 0.0.9
     *
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'autoUpgrade'         => 'AutoUpgrade',
        'bigCustomer'         => 'BigCustomer',
        'curVersion'          => 'CurVersion',
        'forceUpgradeTime'    => 'ForceUpgradeTime',
        'graySwitchStatus'    => 'GraySwitchStatus',
        'latestVersion'       => 'LatestVersion',
        'latestVersionCreate' => 'LatestVersionCreate',
        'latestVersionDesc'   => 'LatestVersionDesc',
        'publishStatus'       => 'PublishStatus',
        'upgradeVersion'      => 'UpgradeVersion',
    ];

    public function validate()
    {
    }

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
