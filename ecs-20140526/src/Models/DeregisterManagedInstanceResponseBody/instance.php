<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeregisterManagedInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The activation code ID.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F7494****
     *
     * @var string
     */
    public $activationId;

    /**
     * @description The version number of Cloud Assistant Agent.
     *
     * @example 2.2.0.102
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description The hostname of the managed instance.
     *
     * @example test-Hostname
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The managed instance ID.
     *
     * @example mi-hz01axdfas****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the managed instance.
     *
     * @example test-InstanceName-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the managed instance.
     *
     * @example 47.8.**.**
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The internal IP address of the managed instance.
     *
     * @example 10.0.**.**
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of times that Cloud Assistant tasks were executed on the managed instance.
     *
     * @example 2
     *
     * @var int
     */
    public $invocationCount;

    /**
     * @description The time when the Cloud Assistant task was last executed.
     *
     * @example 2021-01-20T09:00:40Z
     *
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @description The machine code of the managed instance.
     *
     * @example e03231b37ab14e53b5795ad625fc****
     *
     * @var string
     */
    public $machineId;

    /**
     * @description The operating system type of the managed instance.
     *
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The version information about the operating system.
     *
     * @example Linux_#38~18.04.1-Ubuntu SMP Wed Jan 6 18:26:30 UTC 2021_x86_64
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description The time when the managed instance was registered.
     *
     * @example 2021-01-20T08:57:56Z
     *
     * @var string
     */
    public $registrationTime;

    /**
     * @description The ID of the resource group to which the managed instance belongs.
     *
     * @example rg-123******
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'activationId'     => 'ActivationId',
        'agentVersion'     => 'AgentVersion',
        'hostname'         => 'Hostname',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'internetIp'       => 'InternetIp',
        'intranetIp'       => 'IntranetIp',
        'invocationCount'  => 'InvocationCount',
        'lastInvokedTime'  => 'LastInvokedTime',
        'machineId'        => 'MachineId',
        'osType'           => 'OsType',
        'osVersion'        => 'OsVersion',
        'registrationTime' => 'RegistrationTime',
        'resourceGroupId'  => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->lastInvokedTime) {
            $res['LastInvokedTime'] = $this->lastInvokedTime;
        }
        if (null !== $this->machineId) {
            $res['MachineId'] = $this->machineId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->registrationTime) {
            $res['RegistrationTime'] = $this->registrationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['LastInvokedTime'])) {
            $model->lastInvokedTime = $map['LastInvokedTime'];
        }
        if (isset($map['MachineId'])) {
            $model->machineId = $map['MachineId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['RegistrationTime'])) {
            $model->registrationTime = $map['RegistrationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
