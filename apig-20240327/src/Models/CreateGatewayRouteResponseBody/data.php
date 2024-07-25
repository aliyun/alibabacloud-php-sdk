<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRouteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example gr-cpumc37d*****
     *
     * @var string
     */
    public $gatewayRouteId;
    protected $_name = [
        'gatewayRouteId' => 'gatewayRouteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayRouteId) {
            $res['gatewayRouteId'] = $this->gatewayRouteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayRouteId'])) {
            $model->gatewayRouteId = $map['gatewayRouteId'];
        }

        return $model;
    }
}
