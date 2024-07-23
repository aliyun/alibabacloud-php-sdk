<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest;

use AlibabaCloud\Tea\Model;

class networkInterfaceTrafficConfig extends Model
{
    /**
     * @description The communication mode of the ENI.
     *
     * @example HighPerformance
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The number of queues supported by the ENI.
     *
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description The number of queues supported by the ERI.
     *
     * @example 8
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The receive (Rx) queue depth of the ENI.
     *
     * @example 8192
     *
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The transmit (Tx) queue depth of the ENI.
     *
     * @example 8192
     *
     * @var int
     */
    public $txQueueSize;
    protected $_name = [
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueNumber'                 => 'QueueNumber',
        'queuePairNumber'             => 'QueuePairNumber',
        'rxQueueSize'                 => 'RxQueueSize',
        'txQueueSize'                 => 'TxQueueSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }
        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
        }
        if (null !== $this->rxQueueSize) {
            $res['RxQueueSize'] = $this->rxQueueSize;
        }
        if (null !== $this->txQueueSize) {
            $res['TxQueueSize'] = $this->txQueueSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceTrafficConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }
        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }
        if (isset($map['RxQueueSize'])) {
            $model->rxQueueSize = $map['RxQueueSize'];
        }
        if (isset($map['TxQueueSize'])) {
            $model->txQueueSize = $map['TxQueueSize'];
        }

        return $model;
    }
}
