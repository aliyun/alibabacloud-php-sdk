<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeManagedInstancesResponseBody\instances\tags;

class instances extends Model
{
    /**
     * @var string
     */
    public $activationId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var bool
     */
    public $connected;

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
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $invocationCount;

    /**
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @var string
     */
    public $machineId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $registrationTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'activationId' => 'ActivationId',
        'agentVersion' => 'AgentVersion',
        'connected' => 'Connected',
        'hostname' => 'Hostname',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'invocationCount' => 'InvocationCount',
        'lastInvokedTime' => 'LastInvokedTime',
        'machineId' => 'MachineId',
        'osType' => 'OsType',
        'osVersion' => 'OsVersion',
        'registrationTime' => 'RegistrationTime',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
