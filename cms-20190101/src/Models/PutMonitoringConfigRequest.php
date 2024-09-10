<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutMonitoringConfigRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example true
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description Specifies whether to automatically install the CloudMonitor agent on new ECS instances. Valid values:
     *
     *   true (default): The CloudMonitor agent is automatically installed on new ECS instances.
     *   false: The CloudMonitor agent is not automatically installed on new ECS instances.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstallAgentNewECS;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoInstall'              => 'AutoInstall',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }
        if (null !== $this->enableInstallAgentNewECS) {
            $res['EnableInstallAgentNewECS'] = $this->enableInstallAgentNewECS;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMonitoringConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }
        if (isset($map['EnableInstallAgentNewECS'])) {
            $model->enableInstallAgentNewECS = $map['EnableInstallAgentNewECS'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
