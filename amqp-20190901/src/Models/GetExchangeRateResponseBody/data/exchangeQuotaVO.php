<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateResponseBody\data;

use AlibabaCloud\Dara\Model;

class exchangeQuotaVO extends Model
{
    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var int
     */
    public $inQps;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $outQps;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'exchangeName' => 'ExchangeName',
        'inQps' => 'InQps',
        'instanceId' => 'InstanceId',
        'outQps' => 'OutQps',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }

        if (null !== $this->inQps) {
            $res['InQps'] = $this->inQps;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outQps) {
            $res['OutQps'] = $this->outQps;
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
        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }

        if (isset($map['InQps'])) {
            $model->inQps = $map['InQps'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OutQps'])) {
            $model->outQps = $map['OutQps'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
