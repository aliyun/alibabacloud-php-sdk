<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponseBody\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The ID of the activation code.
     *
     * @example 3704F543-F768-43FA-9864-897F75B3****
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
     * @description Indicates whether the managed instance is connected. Valid values:
     *
     *   true: The managed instance is connected and you can manage the instance by using Cloud Assistant.
     *   false: The managed instance is not connected because the managed instance is down or because Cloud Assistant Agent is not installed correctly.
     *
     * @example true
     *
     * @var bool
     */
    public $connected;

    /**
     * @description The hostname of the managed instance.
     *
     * @example demo
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The ID of the managed instance.
     *
     * @example mi-hz018jrc1o0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the managed instance.
     *
     * @example webAPP-linux-01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the managed instance.
     *
     * @example 40.65.\*\*.**
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The internal IP address of the managed instance.
     *
     * @example 10.0.\*\*.**
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of times that Cloud Assistant tasks were executed on the managed instance.
     *
     * @example 1
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
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The version information of the operating system.
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

    /**
     * @description The tags of the managed instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'activationId'     => 'ActivationId',
        'agentVersion'     => 'AgentVersion',
        'connected'        => 'Connected',
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
        'tags'             => 'Tags',
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
        if (null !== $this->connected) {
            $res['Connected'] = $this->connected;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
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
        if (isset($map['Connected'])) {
            $model->connected = $map['Connected'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
