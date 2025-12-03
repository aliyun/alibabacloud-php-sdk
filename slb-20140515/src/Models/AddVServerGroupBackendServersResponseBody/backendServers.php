<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\AddVServerGroupBackendServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\AddVServerGroupBackendServersResponseBody\backendServers\backendServer;

class backendServers extends Model
{
    /**
     * @var backendServer[]
     */
    public $backendServer;
    protected $_name = [
        'backendServer' => 'BackendServer',
    ];

    public function validate()
    {
        if (\is_array($this->backendServer)) {
            Model::validateArray($this->backendServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServer) {
            if (\is_array($this->backendServer)) {
                $res['BackendServer'] = [];
                $n1 = 0;
                foreach ($this->backendServer as $item1) {
                    $res['BackendServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BackendServer'])) {
            if (!empty($map['BackendServer'])) {
                $model->backendServer = [];
                $n1 = 0;
                foreach ($map['BackendServer'] as $item1) {
                    $model->backendServer[$n1] = backendServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
