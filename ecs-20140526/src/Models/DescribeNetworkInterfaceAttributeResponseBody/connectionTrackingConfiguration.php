<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class connectionTrackingConfiguration extends Model
{
    /**
     * @description The timeout period for TCP connections in the TIME_WAIT or CLOSE_WAIT state. Unit: seconds. Valid values: integers from 3 to 15.
     *
     * >  If the associated Elastic Compute Service (ECS) instance is used with a Network Load Balancer (NLB) or Classic Load Balancer (CLB) instance, the default timeout period for TCP connections in the `TIME_WAIT` state is 15 seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $tcpClosedAndTimeWaitTimeout;

    /**
     * @description The timeout period for TCP connections in the ESTABLISHED state. Unit: seconds. Valid values: 30, 60, 80, 100, 200, 300, 500, 700, and 910.
     *
     * @example 910
     *
     * @var int
     */
    public $tcpEstablishedTimeout;

    /**
     * @description The timeout period for UDP flows. Unit: seconds. Valid values: 10, 20, 30, 60, 80, and 100.
     *
     * >  If the associated ECS instance is used with an NLB or CLB instance, the default timeout period for UDP flows is 100 seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $udpTimeout;
    protected $_name = [
        'tcpClosedAndTimeWaitTimeout' => 'TcpClosedAndTimeWaitTimeout',
        'tcpEstablishedTimeout' => 'TcpEstablishedTimeout',
        'udpTimeout' => 'UdpTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tcpClosedAndTimeWaitTimeout) {
            $res['TcpClosedAndTimeWaitTimeout'] = $this->tcpClosedAndTimeWaitTimeout;
        }
        if (null !== $this->tcpEstablishedTimeout) {
            $res['TcpEstablishedTimeout'] = $this->tcpEstablishedTimeout;
        }
        if (null !== $this->udpTimeout) {
            $res['UdpTimeout'] = $this->udpTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionTrackingConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TcpClosedAndTimeWaitTimeout'])) {
            $model->tcpClosedAndTimeWaitTimeout = $map['TcpClosedAndTimeWaitTimeout'];
        }
        if (isset($map['TcpEstablishedTimeout'])) {
            $model->tcpEstablishedTimeout = $map['TcpEstablishedTimeout'];
        }
        if (isset($map['UdpTimeout'])) {
            $model->udpTimeout = $map['UdpTimeout'];
        }

        return $model;
    }
}
