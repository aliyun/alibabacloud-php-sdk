<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccConfigResponseBody;

use AlibabaCloud\Tea\Model;

class flexAccConfig extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tcpPorts;

    /**
     * @var string
     */
    public $udpPorts;
    protected $_name = [
        'status'   => 'Status',
        'tcpPorts' => 'TcpPorts',
        'udpPorts' => 'UdpPorts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tcpPorts) {
            $res['TcpPorts'] = $this->tcpPorts;
        }
        if (null !== $this->udpPorts) {
            $res['UdpPorts'] = $this->udpPorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexAccConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TcpPorts'])) {
            $model->tcpPorts = $map['TcpPorts'];
        }
        if (isset($map['UdpPorts'])) {
            $model->udpPorts = $map['UdpPorts'];
        }

        return $model;
    }
}
