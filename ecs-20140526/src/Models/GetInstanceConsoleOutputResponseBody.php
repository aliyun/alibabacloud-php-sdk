<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceConsoleOutputResponseBody extends Model
{
    /**
     * @var string
     */
    public $consoleOutput;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'consoleOutput' => 'ConsoleOutput',
        'instanceId' => 'InstanceId',
        'lastUpdateTime' => 'LastUpdateTime',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleOutput) {
            $res['ConsoleOutput'] = $this->consoleOutput;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConsoleOutput'])) {
            $model->consoleOutput = $map['ConsoleOutput'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
