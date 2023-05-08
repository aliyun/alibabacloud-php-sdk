<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest\headers;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest\TLSMatchAttributes;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest\URI;
use AlibabaCloud\Tea\Model;

class matchRequest extends Model
{
    /**
     * @description The name of the service defined in the service registry.
     *
     * @var headers[]
     */
    public $headers;

    /**
     * @description The name of the service subset.
     *
     * @var int[]
     */
    public $ports;

    /**
     * @description The endpoints of service instances for Layer 4 weighted routing.
     *
     * @var TLSMatchAttributes[]
     */
    public $TLSMatchAttributes;

    /**
     * @description The percentage of requests that are aborted with the specified error code.
     *
     * @var URI
     */
    public $URI;
    protected $_name = [
        'headers'            => 'Headers',
        'ports'              => 'Ports',
        'TLSMatchAttributes' => 'TLSMatchAttributes',
        'URI'                => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['Headers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->TLSMatchAttributes) {
            $res['TLSMatchAttributes'] = [];
            if (null !== $this->TLSMatchAttributes && \is_array($this->TLSMatchAttributes)) {
                $n = 0;
                foreach ($this->TLSMatchAttributes as $item) {
                    $res['TLSMatchAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->URI) {
            $res['URI'] = null !== $this->URI ? $this->URI->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n              = 0;
                foreach ($map['Headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = $map['Ports'];
            }
        }
        if (isset($map['TLSMatchAttributes'])) {
            if (!empty($map['TLSMatchAttributes'])) {
                $model->TLSMatchAttributes = [];
                $n                         = 0;
                foreach ($map['TLSMatchAttributes'] as $item) {
                    $model->TLSMatchAttributes[$n++] = null !== $item ? TLSMatchAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['URI'])) {
            $model->URI = URI::fromMap($map['URI']);
        }

        return $model;
    }
}
