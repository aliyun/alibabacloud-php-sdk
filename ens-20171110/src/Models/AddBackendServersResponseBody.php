<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class AddBackendServersResponseBody extends Model
{
    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backendServers' => 'BackendServers',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBackendServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
