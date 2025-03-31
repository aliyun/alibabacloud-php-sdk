<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\loadBalancers\ports;

class loadBalancers extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressIpVersion;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var bool
     */
    public $gatewayDefault;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'address',
        'addressIpVersion' => 'addressIpVersion',
        'addressType' => 'addressType',
        'gatewayDefault' => 'gatewayDefault',
        'loadBalancerId' => 'loadBalancerId',
        'mode' => 'mode',
        'ports' => 'ports',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1++] = ports::fromMap($item1);
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
