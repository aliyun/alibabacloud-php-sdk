<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterCnnfStatusDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the container firewall plug-in is installed.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The machine type of the instance. The value is fixed as **ecs**.
     *
     * @example true
     *
     * @var bool
     */
    public $installed;

    /**
     * @description The online status of the plug-in. Valid values:
     *
     *   **false**: The plug-in is offline.
     *   **true**: The plug-in is online.
     *
     * @example i-bp180bogui4fc0z4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The cause why the plug-in is invalid. Valid values:
     *
     *   **PLUGIN_OFFLINE**: The plug-in is offline.
     *   **PLUGIN\_NOT_INSTALLED**: The plug-in is not installed.
     *   **PLUGIN\_INVALID_VERSION**: The version of the plug-in is invalid.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example PLUGIN_OFFLINE
     *
     * @var string
     */
    public $invalidType;

    /**
     * @description The public IP address of the associated instance.
     *
     * @example security
     *
     * @var string
     */
    public $machineName;

    /**
     * @example ecs
     *
     * @var int
     */
    public $machineType;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example alinet
     *
     * @var string
     */
    public $pluginName;

    /**
     * @example 3.3
     *
     * @var string
     */
    public $pluginVersion;

    /**
     * @description The version of the plug-in.
     *
     * @example false
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the plug-in. The value is fixed as **alinet**.
     *
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'installed'     => 'Installed',
        'instanceId'    => 'InstanceId',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'invalidType'   => 'InvalidType',
        'machineName'   => 'MachineName',
        'machineType'   => 'MachineType',
        'pluginName'    => 'PluginName',
        'pluginVersion' => 'PluginVersion',
        'status'        => 'Status',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->installed) {
            $res['Installed'] = $this->installed;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->invalidType) {
            $res['InvalidType'] = $this->invalidType;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Installed'])) {
            $model->installed = $map['Installed'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['InvalidType'])) {
            $model->invalidType = $map['InvalidType'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
