<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class GetExchangeRateRequest extends Model
{
    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var mixed[]
     */
    public $exchangeNames;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'exchangeNames' => 'ExchangeNames',
        'instanceId' => 'InstanceId',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        if (\is_array($this->exchangeNames)) {
            Model::validateArray($this->exchangeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->exchangeNames) {
            if (\is_array($this->exchangeNames)) {
                $res['ExchangeNames'] = [];
                foreach ($this->exchangeNames as $key1 => $value1) {
                    $res['ExchangeNames'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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

        if (isset($map['ExchangeNames'])) {
            if (!empty($map['ExchangeNames'])) {
                $model->exchangeNames = [];
                foreach ($map['ExchangeNames'] as $key1 => $value1) {
                    $model->exchangeNames[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
