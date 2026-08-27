<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayLoadBalancersRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $network;

    /**
     * @var bool
     */
    public $related;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'all' => 'all',
        'loadBalancerId' => 'loadBalancerId',
        'network' => 'network',
        'related' => 'related',
        'type' => 'type',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }

        if (null !== $this->loadBalancerId) {
            $res['loadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->network) {
            $res['network'] = $this->network;
        }

        if (null !== $this->related) {
            $res['related'] = $this->related;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }

        if (isset($map['loadBalancerId'])) {
            $model->loadBalancerId = $map['loadBalancerId'];
        }

        if (isset($map['network'])) {
            $model->network = $map['network'];
        }

        if (isset($map['related'])) {
            $model->related = $map['related'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
