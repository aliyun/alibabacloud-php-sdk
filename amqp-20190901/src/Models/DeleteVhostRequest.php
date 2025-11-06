<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DeleteVhostRequest extends Model
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
     * @var string
     */
    public $vhostName;

    /**
     * @var mixed[]
     */
    public $vhostNames;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'vhostName' => 'VhostName',
        'vhostNames' => 'VhostNames',
    ];

    public function validate()
    {
        if (\is_array($this->vhostNames)) {
            Model::validateArray($this->vhostNames);
        }
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

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
        }

        if (null !== $this->vhostNames) {
            if (\is_array($this->vhostNames)) {
                $res['VhostNames'] = [];
                foreach ($this->vhostNames as $key1 => $value1) {
                    $res['VhostNames'][$key1] = $value1;
                }
            }
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

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        if (isset($map['VhostNames'])) {
            if (!empty($map['VhostNames'])) {
                $model->vhostNames = [];
                foreach ($map['VhostNames'] as $key1 => $value1) {
                    $model->vhostNames[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
