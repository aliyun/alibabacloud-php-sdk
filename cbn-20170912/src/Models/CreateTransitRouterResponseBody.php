<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 404DA7EC-F495-44B5-B543-6EDCDF90F3D1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the Enterprise Edition transit router.
     *
     * @example tr-uf6llz2286805i44g****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'transitRouterId' => 'TransitRouterId',
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
