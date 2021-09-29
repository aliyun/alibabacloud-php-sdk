<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVehicleResponseBody\vehicles;
use AlibabaCloud\Tea\Model;

class ListVehicleResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var vehicles
     */
    public $vehicles;
    protected $_name = [
        'requestId' => 'RequestId',
        'vehicles'  => 'Vehicles',
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
        if (null !== $this->vehicles) {
            $res['Vehicles'] = null !== $this->vehicles ? $this->vehicles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVehicleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Vehicles'])) {
            $model->vehicles = vehicles::fromMap($map['Vehicles']);
        }

        return $model;
    }
}
