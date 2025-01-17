<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class nodePluginInfoList extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var bool
     */
    public $installed;
    /**
     * @var string
     */
    public $machineInternetIp;
    /**
     * @var string
     */
    public $machineIntranetIp;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var int
     */
    public $machineType;
    /**
     * @var bool
     */
    public $online;
    /**
     * @var string
     */
    public $pluginName;
    /**
     * @var string
     */
    public $pluginVersion;
    /**
     * @var string
     */
    public $uuid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
