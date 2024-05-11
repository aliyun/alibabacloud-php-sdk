<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpgradeAddonReleaseRequest extends Model
{
    /**
     * @description Version of Addon.
     *
     * This parameter is required.
     * @example 0.0.2
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description Whether to pre-check this request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Environment ID.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of Release.
     *
     * This parameter is required.
     * @example mysql-1695372983039
     *
     * @var string
     */
    public $releaseName;

    /**
     * @description Metadata information.
     *
     * This parameter is required.
     * @example {"host":"mysql-service.default","port":3306,"username":"root","password":"roots"}
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpgradeAddonReleaseRequest
     */
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
