<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeByteHitRateDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class byteHitRateDataModel extends Model
{
    /**
     * @example 0.8956940476262277
     *
     * @var float
     */
    public $byteHitRate;

    /**
     * @example 2020-05-15T09:13:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'byteHitRate' => 'ByteHitRate',
        'timeStamp'   => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byteHitRate) {
            $res['ByteHitRate'] = $this->byteHitRate;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return byteHitRateDataModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByteHitRate'])) {
            $model->byteHitRate = $map['ByteHitRate'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
