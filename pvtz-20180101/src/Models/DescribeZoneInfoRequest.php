<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeZoneInfoRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English.
     *
     * Default value: **en**.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The zone ID. This ID uniquely identifies the zone.
     *
     * This parameter is required.
     * @example df2d03865266bd9842306db586d3****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'lang'   => 'Lang',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZoneInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
