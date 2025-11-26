<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest\backendServers;

class SetBackendServersRequest extends Model
{
    /**
     * @var backendServers[]
     */
    public $backendServers;

    /**
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'backendServers' => 'BackendServers',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
        if (\is_array($this->backendServers)) {
            Model::validateArray($this->backendServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServers) {
            if (\is_array($this->backendServers)) {
                $res['BackendServers'] = [];
                $n1 = 0;
                foreach ($this->backendServers as $item1) {
                    $res['BackendServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
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
        if (isset($map['BackendServers'])) {
            if (!empty($map['BackendServers'])) {
                $model->backendServers = [];
                $n1 = 0;
                foreach ($map['BackendServers'] as $item1) {
                    $model->backendServers[$n1] = backendServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
