<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeSagRouteableAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeableAddress;
    protected $_name = [
        'origin'           => 'Origin',
        'requestId'        => 'RequestId',
        'routeableAddress' => 'RouteableAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeableAddress) {
            $res['RouteableAddress'] = $this->routeableAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagRouteableAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteableAddress'])) {
            $model->routeableAddress = $map['RouteableAddress'];
        }

        return $model;
    }
}
