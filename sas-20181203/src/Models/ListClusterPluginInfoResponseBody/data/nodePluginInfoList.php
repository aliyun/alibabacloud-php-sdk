<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodePluginInfoList extends Model
{
    /**
     * @description The error code returned.
     *
     * @example kenerl not support
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example kenerl not support
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Indicates whether the plug-in is installed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $installed;

    /**
     * @description The public IP address of the server.
     *
     * @example 100.100.XXX.XX
     *
     * @var string
     */
    public $machineInternetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 10.XXX.XXX.XX
     *
     * @var string
     */
    public $machineIntranetIp;

    /**
     * @description The name of the server.
     *
     * @example npznas05
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The type of the instance. Valid values include:
     *
     *   **ecs**: Elastic Compute Service (ECS) instance
     *   **slb**: Server Load Balancer (SLB) instance
     *
     * @example ECS
     *
     * @var int
     */
    public $machineType;

    /**
     * @description Indicates whether the Security Center agent is online. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If the Security Center agent of the server is offline, Security Center does not protect the server.
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The name of the plug-in.
     *
     * @example alihips
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description The version of the plug-in.
     *
     * @example 1.3.1
     *
     * @var string
     */
    public $pluginVersion;

    /**
     * @description The UUID of the server.
     *
     * @example bc563d2b-2a3d-411b-8bbe-d75b8d3c****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The instance ID of the server.
     *
     * @example tpp-cn-2r42njq4y001
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMsg'          => 'ErrorMsg',
        'installed'         => 'Installed',
        'machineInternetIp' => 'MachineInternetIp',
        'machineIntranetIp' => 'MachineIntranetIp',
        'machineName'       => 'MachineName',
        'machineType'       => 'MachineType',
        'online'            => 'Online',
        'pluginName'        => 'PluginName',
        'pluginVersion'     => 'PluginVersion',
        'uuid'              => 'Uuid',
        'instanceId'        => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->installed) {
            $res['Installed'] = $this->installed;
        }
        if (null !== $this->machineInternetIp) {
            $res['MachineInternetIp'] = $this->machineInternetIp;
        }
        if (null !== $this->machineIntranetIp) {
            $res['MachineIntranetIp'] = $this->machineIntranetIp;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePluginInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Installed'])) {
            $model->installed = $map['Installed'];
        }
        if (isset($map['MachineInternetIp'])) {
            $model->machineInternetIp = $map['MachineInternetIp'];
        }
        if (isset($map['MachineIntranetIp'])) {
            $model->machineIntranetIp = $map['MachineIntranetIp'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
