<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description 可用区ID。
     *
     * @example cn-shenzhen-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'zoneId' => 'zoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
