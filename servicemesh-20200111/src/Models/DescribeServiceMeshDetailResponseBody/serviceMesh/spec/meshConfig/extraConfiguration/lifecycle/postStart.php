<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\exec;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\httpGet;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\tcpSocket;

class postStart extends Model
{
    /**
     * @var exec
     */
    public $exec;

    /**
     * @var httpGet
     */
    public $httpGet;

    /**
     * @var tcpSocket
     */
    public $tcpSocket;
    protected $_name = [
        'exec' => 'exec',
        'httpGet' => 'httpGet',
        'tcpSocket' => 'tcpSocket',
    ];

    public function validate()
    {
        if (null !== $this->exec) {
            $this->exec->validate();
        }
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
        if (null !== $this->exec) {
            $res['exec'] = null !== $this->exec ? $this->exec->toArray($noStream) : $this->exec;
        }

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
        if (isset($map['exec'])) {
            $model->exec = exec::fromMap($map['exec']);
        }

        if (isset($map['httpGet'])) {
            $model->httpGet = httpGet::fromMap($map['httpGet']);
        }

        if (isset($map['tcpSocket'])) {
            $model->tcpSocket = tcpSocket::fromMap($map['tcpSocket']);
        }

        return $model;
    }
}
