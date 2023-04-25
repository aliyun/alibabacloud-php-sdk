<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpgradeInstanceVersionRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The major version to be upgraded to. Valid values:
     *
     *   **0.10.2**
     *   **2.2.0**
     *
     * If you set this parameter to the current major version, the system upgrades the instance to the latest minor version.
     * @example 0.10.2
     *
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'targetVersion' => 'TargetVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeInstanceVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }

        return $model;
    }
}
