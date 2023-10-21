<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody\nodeProcesses;

use AlibabaCloud\Tea\Model;

class nodeProcess extends Model
{
    /**
     * @description The command used to obtain the number of processes. Valid value: `number`.
     *
     * >  The `number` command obtains the number of processes that match the condition.
     * @example number
     *
     * @var string
     */
    public $command;

    /**
     * @description The ID of the application group.
     *
     * @example 3619****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance.
     *
     * @example i-hp3hl3cx1pbahzy8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the process.
     *
     * @example 234567
     *
     * @var int
     */
    public $processId;

    /**
     * @description The name of the process.
     *
     * @example Nginx
     *
     * @var string
     */
    public $processName;

    /**
     * @description The user who launched the process.
     *
     * @example alice
     *
     * @var string
     */
    public $processUser;
    protected $_name = [
        'command'     => 'Command',
        'groupId'     => 'GroupId',
        'instanceId'  => 'InstanceId',
        'processId'   => 'ProcessId',
        'processName' => 'ProcessName',
        'processUser' => 'ProcessUser',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nodeProcess
     */
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
