<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeBpsDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class bpsModel extends Model
{
    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 16710625.733333332
     *
     * @var float
     */
    public $bps;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard. The time is displayed in UTC.
     *
     * @example 2019-11-30T05:41:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bps'       => 'Bps',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
