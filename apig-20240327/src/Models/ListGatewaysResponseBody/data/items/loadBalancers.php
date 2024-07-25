<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items;

use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\loadBalancers\ports;
use AlibabaCloud\Tea\Model;

class loadBalancers extends Model
{
    /**
     * @example nlb-xoh3pghr***.cn-hangzhou.nlb.aliyuncs.com
     *
     * @var string
     */
    public $address;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @example Internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @example true
     *
     * @var bool
     */
    public $gatewayDefault;

    /**
     * @example nlb-xqwioje1c91r***
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example Managed
     *
     * @var string
     */
    public $mode;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @example NLB
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address'          => 'address',
        'addressIpVersion' => 'addressIpVersion',
        'addressType'      => 'addressType',
        'gatewayDefault'   => 'gatewayDefault',
        'loadBalancerId'   => 'loadBalancerId',
        'mode'             => 'mode',
        'ports'            => 'ports',
        'status'           => 'status',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->addressIpVersion) {
            $res['addressIpVersion'] = $this->addressIpVersion;
        }
        if (null !== $this->addressType) {
            $res['addressType'] = $this->addressType;
        }
        if (null !== $this->gatewayDefault) {
            $res['gatewayDefault'] = $this->gatewayDefault;
        }
        if (null !== $this->loadBalancerId) {
            $res['loadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->ports) {
            $res['ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['addressIpVersion'])) {
            $model->addressIpVersion = $map['addressIpVersion'];
        }
        if (isset($map['addressType'])) {
            $model->addressType = $map['addressType'];
        }
        if (isset($map['gatewayDefault'])) {
            $model->gatewayDefault = $map['gatewayDefault'];
        }
        if (isset($map['loadBalancerId'])) {
            $model->loadBalancerId = $map['loadBalancerId'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n            = 0;
                foreach ($map['ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
