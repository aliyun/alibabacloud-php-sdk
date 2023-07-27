<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers\request;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers\response;
use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The request header to be matched.
     *
     * @var request
     */
    public $request;

    /**
     * @description The processing of the headers of the response that is to be returned.
     *
     * @var response
     */
    public $response;
    protected $_name = [
        'request'  => 'Request',
        'response' => 'Response',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }
        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        return $model;
    }
}
