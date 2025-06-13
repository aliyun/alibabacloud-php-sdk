<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class Instance extends Model
{
    /**
     * @var float
     */
    public $currentAmount;

    /**
     * @var string
     */
    public $externalIP;

    /**
     * @var int
     */
    public $externalInstancePort;

    /**
     * @var string
     */
    public $hostIP;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $innerIP;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $instancePort;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isSpot;

    /**
     * @var bool
     */
    public $isolated;

    /**
     * @var mixed[][]
     */
    public $lastState;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var int
     */
    public $readyProcesses;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $startAt;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantHostIP;

    /**
     * @var string
     */
    public $tenantInstanceIP;

    /**
     * @var int
     */
    public $totalProcesses;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'currentAmount' => 'CurrentAmount',
        'externalIP' => 'ExternalIP',
        'externalInstancePort' => 'ExternalInstancePort',
        'hostIP' => 'HostIP',
        'hostName' => 'HostName',
        'innerIP' => 'InnerIP',
        'instanceName' => 'InstanceName',
        'instancePort' => 'InstancePort',
        'instanceType' => 'InstanceType',
        'isSpot' => 'IsSpot',
        'isolated' => 'Isolated',
        'lastState' => 'LastState',
        'namespace' => 'Namespace',
        'originalAmount' => 'OriginalAmount',
        'readyProcesses' => 'ReadyProcesses',
        'reason' => 'Reason',
        'resourceType' => 'ResourceType',
        'restartCount' => 'RestartCount',
        'role' => 'Role',
        'startAt' => 'StartAt',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tenantHostIP' => 'TenantHostIP',
        'tenantInstanceIP' => 'TenantInstanceIP',
        'totalProcesses' => 'TotalProcesses',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->lastState)) {
            Model::validateArray($this->lastState);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentAmount) {
            $res['CurrentAmount'] = $this->currentAmount;
        }

        if (null !== $this->externalIP) {
            $res['ExternalIP'] = $this->externalIP;
        }

        if (null !== $this->externalInstancePort) {
            $res['ExternalInstancePort'] = $this->externalInstancePort;
        }

        if (null !== $this->hostIP) {
            $res['HostIP'] = $this->hostIP;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->innerIP) {
            $res['InnerIP'] = $this->innerIP;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instancePort) {
            $res['InstancePort'] = $this->instancePort;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isSpot) {
            $res['IsSpot'] = $this->isSpot;
        }

        if (null !== $this->isolated) {
            $res['Isolated'] = $this->isolated;
        }

        if (null !== $this->lastState) {
            if (\is_array($this->lastState)) {
                $res['LastState'] = [];
                $n1 = 0;
                foreach ($this->lastState as $item1) {
                    if (\is_array($item1)) {
                        $res['LastState'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['LastState'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->readyProcesses) {
            $res['ReadyProcesses'] = $this->readyProcesses;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->startAt) {
            $res['StartAt'] = $this->startAt;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantHostIP) {
            $res['TenantHostIP'] = $this->tenantHostIP;
        }

        if (null !== $this->tenantInstanceIP) {
            $res['TenantInstanceIP'] = $this->tenantInstanceIP;
        }

        if (null !== $this->totalProcesses) {
            $res['TotalProcesses'] = $this->totalProcesses;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['CurrentAmount'])) {
            $model->currentAmount = $map['CurrentAmount'];
        }

        if (isset($map['ExternalIP'])) {
            $model->externalIP = $map['ExternalIP'];
        }

        if (isset($map['ExternalInstancePort'])) {
            $model->externalInstancePort = $map['ExternalInstancePort'];
        }

        if (isset($map['HostIP'])) {
            $model->hostIP = $map['HostIP'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['InnerIP'])) {
            $model->innerIP = $map['InnerIP'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstancePort'])) {
            $model->instancePort = $map['InstancePort'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsSpot'])) {
            $model->isSpot = $map['IsSpot'];
        }

        if (isset($map['Isolated'])) {
            $model->isolated = $map['Isolated'];
        }

        if (isset($map['LastState'])) {
            if (!empty($map['LastState'])) {
                $model->lastState = [];
                $n1 = 0;
                foreach ($map['LastState'] as $item1) {
                    if (!empty($item1)) {
                        $model->lastState[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->lastState[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['ReadyProcesses'])) {
            $model->readyProcesses = $map['ReadyProcesses'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['StartAt'])) {
            $model->startAt = $map['StartAt'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantHostIP'])) {
            $model->tenantHostIP = $map['TenantHostIP'];
        }

        if (isset($map['TenantInstanceIP'])) {
            $model->tenantInstanceIP = $map['TenantInstanceIP'];
        }

        if (isset($map['TotalProcesses'])) {
            $model->totalProcesses = $map['TotalProcesses'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
