<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeBpsDataResponseBody\realTimeBpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The timestamp of the returned data.
     *
     * @example 2015-11-30T05:39:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 59392614.8
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
