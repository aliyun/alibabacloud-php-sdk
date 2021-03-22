<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $activationId;

    /**
     * @var string
     */
    public $registrationTime;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $invocationCount;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $machineId;
    protected $_name = [
        'lastInvokedTime'  => 'LastInvokedTime',
        'internetIp'       => 'InternetIp',
        'hostname'         => 'Hostname',
        'instanceId'       => 'InstanceId',
        'intranetIp'       => 'IntranetIp',
        'activationId'     => 'ActivationId',
        'registrationTime' => 'RegistrationTime',
        'agentVersion'     => 'AgentVersion',
        'instanceName'     => 'InstanceName',
        'osType'           => 'OsType',
        'invocationCount'  => 'InvocationCount',
        'osVersion'        => 'OsVersion',
        'machineId'        => 'MachineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastInvokedTime) {
            $res['LastInvokedTime'] = $this->lastInvokedTime;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }
        if (null !== $this->registrationTime) {
            $res['RegistrationTime'] = $this->registrationTime;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->machineId) {
            $res['MachineId'] = $this->machineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastInvokedTime'])) {
            $model->lastInvokedTime = $map['LastInvokedTime'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }
        if (isset($map['RegistrationTime'])) {
            $model->registrationTime = $map['RegistrationTime'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['MachineId'])) {
            $model->machineId = $map['MachineId'];
        }

        return $model;
    }
}
