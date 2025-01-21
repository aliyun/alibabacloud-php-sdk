<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpgradeAddonReleaseRequest extends Model
{
    /**
     * @var string
     */
    public $addonVersion;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $releaseName;
    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'addonVersion'  => 'AddonVersion',
        'dryRun'        => 'DryRun',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
        'releaseName'   => 'ReleaseName',
        'values'        => 'Values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
        }

        if (null !== $this->values) {
            $res['Values'] = $this->values;
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
        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }

        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
