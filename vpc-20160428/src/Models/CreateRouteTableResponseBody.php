<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateRouteTableResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 62172DD5-6BAC-45DF-8D44-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the route tables.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRouteTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
