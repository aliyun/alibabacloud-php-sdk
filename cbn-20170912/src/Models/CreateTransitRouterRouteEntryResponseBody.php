<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterRouteEntryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 835E7F4B-B380-4E0F-96A5-6EA572388047
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the route.
     *
     * @example rte-75eg4jprkvk0pw****
     *
     * @var string
     */
    public $transitRouterRouteEntryId;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'transitRouterRouteEntryId' => 'TransitRouterRouteEntryId',
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
        if (null !== $this->transitRouterRouteEntryId) {
            $res['TransitRouterRouteEntryId'] = $this->transitRouterRouteEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterRouteEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterRouteEntryId'])) {
            $model->transitRouterRouteEntryId = $map['TransitRouterRouteEntryId'];
        }

        return $model;
    }
}
