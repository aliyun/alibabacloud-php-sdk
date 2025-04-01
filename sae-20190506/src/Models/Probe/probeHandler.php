<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\Probe;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\httpGet;
use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\tcpSocket;

class probeHandler extends Model
{
    /**
     * @var httpGet
     */
    public $httpGet;

    /**
     * @var tcpSocket
     */
    public $tcpSocket;
    protected $_name = [
        'httpGet' => 'httpGet',
        'tcpSocket' => 'tcpSocket',
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
            $res['httpGet'] = null !== $this->httpGet ? $this->httpGet->toArray($noStream) : $this->httpGet;
        }

        if (null !== $this->tcpSocket) {
            $res['tcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toArray($noStream) : $this->tcpSocket;
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
        if (isset($map['httpGet'])) {
            $model->httpGet = httpGet::fromMap($map['httpGet']);
        }

        if (isset($map['tcpSocket'])) {
            $model->tcpSocket = tcpSocket::fromMap($map['tcpSocket']);
        }

        return $model;
    }
}
