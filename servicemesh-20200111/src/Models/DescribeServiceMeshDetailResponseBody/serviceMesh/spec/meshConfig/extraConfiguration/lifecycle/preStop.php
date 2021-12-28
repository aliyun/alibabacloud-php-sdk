<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop\exec;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop\HTTPGet;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop\TCPSocket;
use AlibabaCloud\Tea\Model;

class preStop extends Model
{
    /**
     * @var exec
     */
    public $exec;

    /**
     * @var HTTPGet
     */
    public $HTTPGet;

    /**
     * @var TCPSocket
     */
    public $TCPSocket;
    protected $_name = [
        'exec'      => 'Exec',
        'HTTPGet'   => 'HTTPGet',
        'TCPSocket' => 'TCPSocket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exec) {
            $res['Exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        }
        if (null !== $this->HTTPGet) {
            $res['HTTPGet'] = null !== $this->HTTPGet ? $this->HTTPGet->toMap() : null;
        }
        if (null !== $this->TCPSocket) {
            $res['TCPSocket'] = null !== $this->TCPSocket ? $this->TCPSocket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exec'])) {
            $model->exec = exec::fromMap($map['Exec']);
        }
        if (isset($map['HTTPGet'])) {
            $model->HTTPGet = HTTPGet::fromMap($map['HTTPGet']);
        }
        if (isset($map['TCPSocket'])) {
            $model->TCPSocket = TCPSocket::fromMap($map['TCPSocket']);
        }

        return $model;
    }
}
