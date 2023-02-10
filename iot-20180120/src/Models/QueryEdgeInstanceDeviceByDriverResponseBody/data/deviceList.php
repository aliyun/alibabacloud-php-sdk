<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDeviceByDriverResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @example Hathoyxglj9jpYPyw3WN******
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'iotId' => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
