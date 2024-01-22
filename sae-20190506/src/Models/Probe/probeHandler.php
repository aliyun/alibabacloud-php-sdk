<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\Probe;

use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\httpGet;
use AlibabaCloud\SDK\Sae\V20190506\Models\Probe\probeHandler\tcpSocket;
use AlibabaCloud\Tea\Model;

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
        'httpGet'   => 'httpGet',
        'tcpSocket' => 'tcpSocket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpGet) {
            $res['httpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        }
        if (null !== $this->tcpSocket) {
            $res['tcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return probeHandler
     */
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
