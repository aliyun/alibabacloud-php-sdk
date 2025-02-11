<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations;

use AlibabaCloud\Dara\Model;

class relatedListeners extends Model
{
    /**
     * @var string
     */
    public $listenerId;
    /**
     * @var int
     */
    public $listenerPort;
    /**
     * @var string
     */
    public $listenerProtocol;
    /**
     * @var string
     */
    public $loadBalancerId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'listenerId'       => 'ListenerId',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerId'   => 'LoadBalancerId',
        'status'           => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
