<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponseBody\backendServers\backendServer;
use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @var backendServer[]
     */
    public $backendServer;
    protected $_name = [
        'backendServer' => 'BackendServer',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServer) {
            $res['BackendServer'] = [];
            if (null !== $this->backendServer && \is_array($this->backendServer)) {
                $n = 0;
                foreach ($this->backendServer as $item) {
                    $res['BackendServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServer'])) {
            if (!empty($map['BackendServer'])) {
                $model->backendServer = [];
                $n = 0;
                foreach ($map['BackendServer'] as $item) {
                    $model->backendServer[$n++] = null !== $item ? backendServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
