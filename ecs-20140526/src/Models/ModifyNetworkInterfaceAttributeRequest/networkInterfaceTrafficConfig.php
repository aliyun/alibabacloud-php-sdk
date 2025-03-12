<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest;

use AlibabaCloud\Tea\Model;

class networkInterfaceTrafficConfig extends Model
{
    /**
     * @description The communication mode of the ENI. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: uses the remote direct memory access (RDMA) communication mode with Elastic RDMA Interface (ERI) enabled.
     *
     * When the ENI is in the InUse state, take note of the following items:
     *
     *   The total number of ERIs attached to the instance cannot exceed the ERI quota for the instance type. To query the ERI quota for an instance type, call the DescribeInstanceTypes operation and check the EriQuantity value in the response.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example HighPerformance
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The number of queues supported by the ENI. When the ENI is in the InUse state, take note of the following items:
     *
     *   The value of this parameter cannot exceed the maximum number of queues allowed per ENI for the instance type.
     *   The total number of queues for all ENIs on the instance cannot exceed the queue quota for the instance type. To query the maximum number of queues per ENI and the queue quota for an instance type, call the DescribeInstanceTypes operation and check the MaximumQueueNumberPerEnig and TotalEniQueueQuantity values in the response.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description The number of queues supported by the ERI. When the ERI is in the InUse state, take note of the following items:
     *
     *   The value of this parameter cannot exceed the maximum number of queues allowed per ERI for the instance type. To query the maximum number of queues allowed per ERI for an instance type, call the DescribeInstanceTypes operation and check the QueuePairNumber value in the response.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example 8
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The receive (Rx) queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Rx queue depth of an ENI must be the same as the transmit (Tx) queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Rx queue depth yields higher inbound throughput but consumes more memory.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example 8192
     *
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The Tx queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Tx queue depth of an ENI must be the same as the Rx queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Tx queue depth yields higher outbound throughput but consumes more memory.
     *
     * >  This parameter is in invitational preview and is not publicly available.
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
