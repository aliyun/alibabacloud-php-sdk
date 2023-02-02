<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponseBody\timeZones;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The description of the time zone.
     *
     * @example (GMT+8:00) Asia/Shanghai
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the time zone.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'description' => 'Description',
        'timeZone'    => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
