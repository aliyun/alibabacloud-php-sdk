<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Instance extends Model
{
    /**
     * @example 0.444
     *
     * @var float
     */
    public $currentAmount;

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
     * @example false
     *
     * @var bool
     */
    public $isSpot;

    /**
     * @example false
     *
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
     * @example 2.2
     *
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
     * @example PublicResource
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @example Standard
     *
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
    public $status;

    /**
     * @example 192.168.0.39
     *
     * @var string
     */
    public $tenantHostIP;

    /**
     * @example 192.168.0.39
     *
     * @var string
     */
    public $tenantInstanceIP;

    /**
     * @var int
     */
    public $totalProcesses;
    protected $_name = [
        'currentAmount'    => 'CurrentAmount',
        'hostIP'           => 'HostIP',
        'hostName'         => 'HostName',
        'innerIP'          => 'InnerIP',
        'instanceName'     => 'InstanceName',
        'instancePort'     => 'InstancePort',
        'isSpot'           => 'IsSpot',
        'isolated'         => 'Isolated',
        'lastState'        => 'LastState',
        'namespace'        => 'Namespace',
        'originalAmount'   => 'OriginalAmount',
        'readyProcesses'   => 'ReadyProcesses',
        'reason'           => 'Reason',
        'resourceType'     => 'ResourceType',
        'restartCount'     => 'RestartCount',
        'role'             => 'Role',
        'startAt'          => 'StartAt',
        'status'           => 'Status',
        'tenantHostIP'     => 'TenantHostIP',
        'tenantInstanceIP' => 'TenantInstanceIP',
        'totalProcesses'   => 'TotalProcesses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentAmount) {
            $res['CurrentAmount'] = $this->currentAmount;
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
        if (null !== $this->isSpot) {
            $res['IsSpot'] = $this->isSpot;
        }
        if (null !== $this->isolated) {
            $res['Isolated'] = $this->isolated;
        }
        if (null !== $this->lastState) {
            $res['LastState'] = $this->lastState;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentAmount'])) {
            $model->currentAmount = $map['CurrentAmount'];
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
        if (isset($map['IsSpot'])) {
            $model->isSpot = $map['IsSpot'];
        }
        if (isset($map['Isolated'])) {
            $model->isolated = $map['Isolated'];
        }
        if (isset($map['LastState'])) {
            if (!empty($map['LastState'])) {
                $model->lastState = $map['LastState'];
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

        return $model;
    }
}
