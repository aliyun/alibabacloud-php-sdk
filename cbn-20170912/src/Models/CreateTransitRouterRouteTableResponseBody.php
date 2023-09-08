<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterRouteTableResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 599904C8-A3DA-4E5F-83B6-D5364E664247
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the custom route table.
     *
     * @example vtb-bp1xbcgpgcz9axl9m****
     *
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
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
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterRouteTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
