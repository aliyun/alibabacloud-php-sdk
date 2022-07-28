<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Instance extends Model
{
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
     * @var mixed[][]
     */
    public $lastState;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $readyProcesses;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $restartCount;

    /**
     * @var string
     */
    public $startAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalProcesses;
    protected $_name = [
        'hostIP'         => 'HostIP',
        'hostName'       => 'HostName',
        'innerIP'        => 'InnerIP',
        'instanceName'   => 'InstanceName',
        'instancePort'   => 'InstancePort',
        'lastState'      => 'LastState',
        'namespace'      => 'Namespace',
        'readyProcesses' => 'ReadyProcesses',
        'reason'         => 'Reason',
        'restartCount'   => 'RestartCount',
        'startAt'        => 'StartAt',
        'status'         => 'Status',
        'totalProcesses' => 'TotalProcesses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->lastState) {
            $res['LastState'] = $this->lastState;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->readyProcesses) {
            $res['ReadyProcesses'] = $this->readyProcesses;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->startAt) {
            $res['StartAt'] = $this->startAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['LastState'])) {
            if (!empty($map['LastState'])) {
                $model->lastState = $map['LastState'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ReadyProcesses'])) {
            $model->readyProcesses = $map['ReadyProcesses'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['StartAt'])) {
            $model->startAt = $map['StartAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalProcesses'])) {
            $model->totalProcesses = $map['TotalProcesses'];
        }

        return $model;
    }
}
