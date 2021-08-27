<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceConsoleOutputResponseBody extends Model
{
    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $consoleOutput;
    protected $_name = [
        'lastUpdateTime' => 'LastUpdateTime',
        'requestId'      => 'RequestId',
        'instanceId'     => 'InstanceId',
        'consoleOutput'  => 'ConsoleOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->consoleOutput) {
            $res['ConsoleOutput'] = $this->consoleOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceConsoleOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ConsoleOutput'])) {
            $model->consoleOutput = $map['ConsoleOutput'];
        }

        return $model;
    }
}
