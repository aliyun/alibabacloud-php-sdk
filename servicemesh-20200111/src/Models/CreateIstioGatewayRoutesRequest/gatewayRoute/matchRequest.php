<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\matchRequest\headers;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\matchRequest\TLSMatchAttributes;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\matchRequest\URI;

class matchRequest extends Model
{
    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var int[]
     */
    public $ports;

    /**
     * @var TLSMatchAttributes[]
     */
    public $TLSMatchAttributes;

    /**
     * @var URI
     */
    public $URI;
    protected $_name = [
        'headers' => 'Headers',
        'ports' => 'Ports',
        'TLSMatchAttributes' => 'TLSMatchAttributes',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->TLSMatchAttributes)) {
            Model::validateArray($this->TLSMatchAttributes);
        }
        if (null !== $this->URI) {
            $this->URI->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->TLSMatchAttributes) {
            if (\is_array($this->TLSMatchAttributes)) {
                $res['TLSMatchAttributes'] = [];
                $n1 = 0;
                foreach ($this->TLSMatchAttributes as $item1) {
                    $res['TLSMatchAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->URI) {
            $res['URI'] = null !== $this->URI ? $this->URI->toArray($noStream) : $this->URI;
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
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = headers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TLSMatchAttributes'])) {
            if (!empty($map['TLSMatchAttributes'])) {
                $model->TLSMatchAttributes = [];
                $n1 = 0;
                foreach ($map['TLSMatchAttributes'] as $item1) {
                    $model->TLSMatchAttributes[$n1] = TLSMatchAttributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['URI'])) {
            $model->URI = URI::fromMap($map['URI']);
        }

        return $model;
    }
}
