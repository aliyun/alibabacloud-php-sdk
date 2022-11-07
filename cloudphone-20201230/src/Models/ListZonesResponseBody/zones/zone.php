<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
