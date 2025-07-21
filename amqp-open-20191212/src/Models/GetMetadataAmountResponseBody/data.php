<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetMetadataAmountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of created exchanges on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 7
     *
     * @var int
     */
    public $currentExchanges;

    /**
     * @description The number of created queues on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 1
     *
     * @var int
     */
    public $currentQueues;

    /**
     * @description The number of created vhosts on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 1
     *
     * @var int
     */
    public $currentVirtualHosts;

    /**
     * @description The maximum number of exchanges that can be created on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 20
     *
     * @var int
     */
    public $maxExchanges;

    /**
     * @description The maximum number of queues that can be created on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 20
     *
     * @var int
     */
    public $maxQueues;

    /**
     * @description The maximum number of vhosts that can be created on the ApsaraMQ for RabbitMQ instance.
     *
     * @example 10
     *
     * @var int
     */
    public $maxVirtualHosts;
    protected $_name = [
        'currentExchanges' => 'CurrentExchanges',
        'currentQueues' => 'CurrentQueues',
        'currentVirtualHosts' => 'CurrentVirtualHosts',
        'maxExchanges' => 'MaxExchanges',
        'maxQueues' => 'MaxQueues',
        'maxVirtualHosts' => 'MaxVirtualHosts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentExchanges) {
            $res['CurrentExchanges'] = $this->currentExchanges;
        }
        if (null !== $this->currentQueues) {
            $res['CurrentQueues'] = $this->currentQueues;
        }
        if (null !== $this->currentVirtualHosts) {
            $res['CurrentVirtualHosts'] = $this->currentVirtualHosts;
        }
        if (null !== $this->maxExchanges) {
            $res['MaxExchanges'] = $this->maxExchanges;
        }
        if (null !== $this->maxQueues) {
            $res['MaxQueues'] = $this->maxQueues;
        }
        if (null !== $this->maxVirtualHosts) {
            $res['MaxVirtualHosts'] = $this->maxVirtualHosts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentExchanges'])) {
            $model->currentExchanges = $map['CurrentExchanges'];
        }
        if (isset($map['CurrentQueues'])) {
            $model->currentQueues = $map['CurrentQueues'];
        }
        if (isset($map['CurrentVirtualHosts'])) {
            $model->currentVirtualHosts = $map['CurrentVirtualHosts'];
        }
        if (isset($map['MaxExchanges'])) {
            $model->maxExchanges = $map['MaxExchanges'];
        }
        if (isset($map['MaxQueues'])) {
            $model->maxQueues = $map['MaxQueues'];
        }
        if (isset($map['MaxVirtualHosts'])) {
            $model->maxVirtualHosts = $map['MaxVirtualHosts'];
        }

        return $model;
    }
}
