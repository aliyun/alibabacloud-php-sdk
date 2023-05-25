<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListPluginStatusResponseBody\instancePluginStatusSet\instancePluginStatus\pluginStatusSet;

use AlibabaCloud\Tea\Model;

class pluginStatus extends Model
{
    /**
     * @description The first time when Cloud Assistant reported the state of the plug-in.
     *
     * @example 2020-01-19T09:15:46Z
     *
     * @var string
     */
    public $firstHeartbeatTime;

    /**
     * @description The last time when Cloud Assistant reported the state of the plug-in.
     *
     * @example 2020-01-19T09:15:46Z
     *
     * @var string
     */
    public $lastHeartbeatTime;

    /**
     * @description The name of the plug-in.
     *
     * @example testName
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description The state of the Cloud Assistant plug-in. Valid values:
     *
     *   NotInstalled
     *   Installed
     *   Running
     *   Stopped
     *   Crashed
     *   Removed
     *   Unknown
     *
     * @example Running
     *
     * @var string
     */
    public $pluginStatus;

    /**
     * @description The version of the plug-in.
     *
     * @example 1.1
     *
     * @var string
     */
    public $pluginVersion;
    protected $_name = [
        'firstHeartbeatTime' => 'FirstHeartbeatTime',
        'lastHeartbeatTime'  => 'LastHeartbeatTime',
        'pluginName'         => 'PluginName',
        'pluginStatus'       => 'PluginStatus',
        'pluginVersion'      => 'PluginVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstHeartbeatTime) {
            $res['FirstHeartbeatTime'] = $this->firstHeartbeatTime;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginStatus) {
            $res['PluginStatus'] = $this->pluginStatus;
        }
        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstHeartbeatTime'])) {
            $model->firstHeartbeatTime = $map['FirstHeartbeatTime'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginStatus'])) {
            $model->pluginStatus = $map['PluginStatus'];
        }
        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }

        return $model;
    }
}
