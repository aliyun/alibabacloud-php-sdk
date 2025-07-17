<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteAddonReleaseRequest extends Model
{
    /**
     * @description The name of the add-on. If you assign a value to AddonName, the ReleaseName parameter is ignored and all AddonReleases that belong to the same add-on are deleted.
     *
     * @example mysql
     *
     * @var string
     */
    public $addonName;

    /**
     * @description Environment ID.
     *
     * This parameter is required.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Whether to be forcibly deleted. The default value is false.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Name of Release.
     *
     * This parameter is required.
     *
     * @example agent-822567d4-2449
     *
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'addonName' => 'AddonName',
        'environmentId' => 'EnvironmentId',
        'force' => 'Force',
        'regionId' => 'RegionId',
        'releaseName' => 'ReleaseName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAddonReleaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }

        return $model;
    }
}
