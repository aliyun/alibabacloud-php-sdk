<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class DeleteExchangeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $virtualHost;

    /**
     * @var string
     */
    public $exchangeName;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'virtualHost'  => 'VirtualHost',
        'exchangeName' => 'ExchangeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }
        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExchangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }
        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }

        return $model;
    }
}
