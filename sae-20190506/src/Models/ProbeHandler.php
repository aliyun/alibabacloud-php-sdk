<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        'httpGet' => 'HttpGet',
        'tcpSocket' => 'TcpSocket',
    ];

    public function validate()
    {
        if (null !== $this->httpGet) {
            $this->httpGet->validate();
        }
        if (null !== $this->tcpSocket) {
            $this->tcpSocket->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toArray($noStream) : $this->httpGet;
        }

        if (null !== $this->tcpSocket) {
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toArray($noStream) : $this->tcpSocket;
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
        if (isset($map['HttpGet'])) {
            $model->httpGet = HTTPGetAction::fromMap($map['HttpGet']);
        }

        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = TCPSocketAction::fromMap($map['TcpSocket']);
        }

        return $model;
    }
}
