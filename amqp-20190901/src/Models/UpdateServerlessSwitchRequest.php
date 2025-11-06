<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class UpdateServerlessSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $serverlessSwitch;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'serverlessSwitch' => 'ServerlessSwitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->serverlessSwitch) {
            $res['ServerlessSwitch'] = $this->serverlessSwitch;
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
        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ServerlessSwitch'])) {
            $model->serverlessSwitch = $map['ServerlessSwitch'];
        }

        return $model;
    }
}
