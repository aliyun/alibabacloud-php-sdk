<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ProbeHandler extends Model
{
    /**
     * @var HTTPGetAction
     */
    public $httpGet;

    /**
     * @var TCPSocketAction
     */
    public $tcpSocket;
    protected $_name = [
        'httpGet'   => 'HttpGet',
        'tcpSocket' => 'TcpSocket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        }
        if (null !== $this->tcpSocket) {
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProbeHandler
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpGet'])) {
            $model->httpGet = HTTPGetAction::fromMap($map['HttpGet']);
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = TCPSocketAction::fromMap($map['TcpSocket']);
        }

        return $model;
    }
}
