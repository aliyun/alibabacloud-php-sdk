<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyNetworkInterfaceAttributeRequest;

use AlibabaCloud\Tea\Model;

class connectionTrackingConfiguration extends Model
{
    /**
     * @description This parameter is unavailable for public use.
     *
     * @var int
     */
    public $tcpClosedAndTimeWaitTimeout;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @var int
     */
    public $tcpEstablishedTimeout;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @var int
     */
    public $udpTimeout;
    protected $_name = [
        'tcpClosedAndTimeWaitTimeout' => 'TcpClosedAndTimeWaitTimeout',
        'tcpEstablishedTimeout'       => 'TcpEstablishedTimeout',
        'udpTimeout'                  => 'UdpTimeout',
    ];

    public function validate()
    {
    }

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
