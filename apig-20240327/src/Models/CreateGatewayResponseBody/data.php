<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example gw-cq2vundlhtg***
     *
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'gatewayId' => 'gatewayId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        return $model;
    }
}
