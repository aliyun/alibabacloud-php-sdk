<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody\nodeProcesses;

use AlibabaCloud\Tea\Model;

class nodeProcess extends Model
{
    /**
     * @var string
     */
    public $processName;

    /**
     * @var int
     */
    public $processId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $processUser;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'processName' => 'ProcessName',
        'processId'   => 'ProcessId',
        'groupId'     => 'GroupId',
        'command'     => 'Command',
        'processUser' => 'ProcessUser',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeProcess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
