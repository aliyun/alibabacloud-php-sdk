<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentDashboardsRequest extends Model
{
    /**
     * @description Name of Addon,One of AddonName and Scene must be filled in.
     *
     * @example trace-java
     *
     * @var string
     */
    public $addonName;

    /**
     * @description The ID of the environment instance.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scenario of Addon. Either AddonName or Scene is required.
     *
     * @example database
     *
     * @var string
     */
    public $scene;
    protected $_name = [
        'addonName'     => 'AddonName',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
        'scene'         => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentDashboardsRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
