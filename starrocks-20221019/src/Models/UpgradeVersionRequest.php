<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Tea\Model;

class UpgradeVersionRequest extends Model
{
    /**
     * @var bool
     */
    public $fastMode;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example c-b25e21e24388****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether the minor version is upgraded. Default value: true. Valid values:
     *
     *   true: The minor version is upgraded.
     *   false: The major version is upgraded.
     *
     * @example true
     *
     * @var bool
     */
    public $minor;

    /**
     * @description The version to which you want to upgrade.
     *
     * This parameter is required.
     *
     * @example 3.3.2-1.77-1.6.4
     *
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'fastMode' => 'FastMode',
        'instanceId' => 'InstanceId',
        'minor' => 'Minor',
        'targetVersion' => 'TargetVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fastMode) {
            $res['FastMode'] = $this->fastMode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FastMode'])) {
            $model->fastMode = $map['FastMode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }

        return $model;
    }
}
