<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateRouteTableResponseBody extends Model
{
    /**
     * @var string
     */
    public $associateType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'associateType' => 'AssociateType',
        'requestId'     => 'RequestId',
        'routeTableId'  => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateType) {
            $res['AssociateType'] = $this->associateType;
        }
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
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
