<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Dara\Model;

class listener extends Model
{
    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $forwardPort;

    /**
     * @var string
     */
    public $listenerForward;

    /**
     * @var string
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'backendServerPort' => 'BackendServerPort',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'forwardPort' => 'ForwardPort',
        'listenerForward' => 'ListenerForward',
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
        'protocol' => 'Protocol',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }

        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }

        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
