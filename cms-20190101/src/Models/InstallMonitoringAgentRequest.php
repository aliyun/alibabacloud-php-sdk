<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class InstallMonitoringAgentRequest extends Model
{
    /**
     * @description Specifies whether to install the CloudMonitor agent. Valid values:
     *
     *   true (default value): yes
     *   false: no
     *
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description Specifies whether to install the CloudMonitor agent on all ECS instances that belong to the current Alibaba Cloud account. Valid values:
     *
     *   `onlyInstallNotHasAgent`: installs the latest version of the CloudMonitor agent only on ECS instances on which the agent is not installed.
     *   `onlyUpgradeAgent`: upgrades the CloudMonitor agent to the latest version only for ECS instances on which an earlier version of the agent is installed.
     *   `installAndUpgrade`: installs the latest version of the CloudMonitor agent on ECS instances on which the agent is not installed, and upgrades the CloudMonitor agent to the latest version for ECS instances on which an earlier version of the agent is installed.
     *
     * >  If you set the InstallCommand parameter, the `InstanceIds` parameter does not take effect.
     * @example onlyInstallNotHasAgent
     *
     * @var string
     */
    public $installCommand;

    /**
     * @example i-m5e0k0bexac8tykr****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'force'          => 'Force',
        'installCommand' => 'InstallCommand',
        'instanceIds'    => 'InstanceIds',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->installCommand) {
            $res['InstallCommand'] = $this->installCommand;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallMonitoringAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstallCommand'])) {
            $model->installCommand = $map['InstallCommand'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
