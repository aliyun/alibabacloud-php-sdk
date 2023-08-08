<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenRouteMapResponseBody extends Model
{
    /**
     * @example 62172DD5-6BAC-45DF-8D44-56SDF467BAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cenrmap-w4yf7toozfol3q****
     *
     * @var string
     */
    public $routeMapId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'routeMapId' => 'RouteMapId',
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
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenRouteMapResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }

        return $model;
    }
}
