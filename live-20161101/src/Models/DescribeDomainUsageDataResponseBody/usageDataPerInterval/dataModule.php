<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeDomainUsageDataResponseBody\usageDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The timestamp of the returned data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The amount of resource usage.
     *
     *   If the value of the Field parameter is traf or req_traf, the returned data is measured in bytes.
     *   If the value of the Field parameter is bps or req_bps, the returned data is measured in bit/s.
     *   If the value of the Field parameter is acc, the returned data is measured by count.
     *
     * @example 423304182
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
