<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceConsoleOutputResponseBody extends Model
{
    /**
     * @var string
     */
    public $consoleOutput;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'consoleOutput'  => 'ConsoleOutput',
        'requestId'      => 'RequestId',
        'lastUpdateTime' => 'LastUpdateTime',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleOutput) {
            $res['ConsoleOutput'] = $this->consoleOutput;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ConsoleOutput'])) {
            $model->consoleOutput = $map['ConsoleOutput'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
