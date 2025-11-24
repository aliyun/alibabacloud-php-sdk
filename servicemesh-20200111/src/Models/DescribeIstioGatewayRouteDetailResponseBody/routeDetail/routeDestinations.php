<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\destination;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers;

class routeDestinations extends Model
{
    /**
     * @var destination
     */
    public $destination;

    /**
     * @var headers
     */
    public $headers;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'destination' => 'Destination',
        'headers' => 'Headers',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        if (null !== $this->destination) {
            $this->destination->validate();
        }
        if (null !== $this->headers) {
            $this->headers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toArray($noStream) : $this->destination;
        }

        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toArray($noStream) : $this->headers;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Destination'])) {
            $model->destination = destination::fromMap($map['Destination']);
        }

        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
