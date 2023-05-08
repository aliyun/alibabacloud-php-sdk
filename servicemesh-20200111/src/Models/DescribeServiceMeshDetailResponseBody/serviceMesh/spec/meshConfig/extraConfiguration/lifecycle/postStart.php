<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\exec;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\httpGet;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart\tcpSocket;
use AlibabaCloud\Tea\Model;

class postStart extends Model
{
    /**
     * @description The post-start script.
     *
     * @var exec
     */
    public $exec;

    /**
     * @description The HTTP GET request that is sent before the instance stops.
     *
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description The TCP socket request that is sent.
     *
     * @var tcpSocket
     */
    public $tcpSocket;
    protected $_name = [
        'exec'      => 'exec',
        'httpGet'   => 'httpGet',
        'tcpSocket' => 'tcpSocket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exec) {
            $res['exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        }
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
     * @return postStart
     */
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
