<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateCenRouteMapResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeMapId;
    protected $_name = [
        'requestId' => 'RequestId',
        'routeMapId' => 'RouteMapId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
