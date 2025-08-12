<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody\nodeProcesses;

use AlibabaCloud\Dara\Model;

class nodeProcess extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $processUser;
    protected $_name = [
        'command' => 'Command',
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processUser' => 'ProcessUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }

        return $model;
    }
}
