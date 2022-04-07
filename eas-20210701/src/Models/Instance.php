<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Instance extends Model
{
    /**
     * @description 实例所在的宿主机IP
     *
     * @var string
     */
    public $hostIP;

    /**
     * @description 实例所在的宿主机名字
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 实例的内网IP
     *
     * @var string
     */
    public $innerIP;

    /**
     * @description 实例的名字
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 实例的网络端口
     *
     * @var int
     */
    public $instancePort;

    /**
     * @description 实例上一次退出的状态
     *
     * @var mixed[][]
     */
    public $lastState;

    /**
     * @description 实例的命名空间
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 实例已经启动完成的进程数
     *
     * @var int
     */
    public $readyProcesses;

    /**
     * @description 实例当前状态的标识
     *
     * @var string
     */
    public $reason;

    /**
     * @description 实例重启次数
     *
     * @var int
     */
    public $restartCount;

    /**
     * @description 实例的启动时间
     *
     * @var string
     */
    public $startAt;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 实例总的进程数
     *
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
