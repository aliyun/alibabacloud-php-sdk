<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCurrentVersionPublishResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $autoUpgrade;
    /**
     * @var bool
     */
    public $bigCustomer;
    /**
     * @var string
     */
    public $curVersion;
    /**
     * @var int
     */
    public $forceUpgradeTime;
    /**
     * @var int
     */
    public $graySwitchStatus;
    /**
     * @var string
     */
    public $latestVersion;
    /**
     * @var int
     */
    public $latestVersionCreate;
    /**
     * @var string
     */
    public $latestVersionDesc;
    /**
     * @var int
     */
    public $publishStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
