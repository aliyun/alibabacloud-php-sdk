<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHitRateDataResponseBody\hitRatePerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The byte hit ratio.
     *
     * @example 0
     *
     * @var float
     */
    public $byteHitRate;

    /**
     * @description The request hit ratio.
     *
     * @example 0
     *
     * @var float
     */
    public $reqHitRate;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2018-03-02T13:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'byteHitRate' => 'ByteHitRate',
        'reqHitRate'  => 'ReqHitRate',
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
        if (null !== $this->reqHitRate) {
            $res['ReqHitRate'] = $this->reqHitRate;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['ByteHitRate'])) {
            $model->byteHitRate = $map['ByteHitRate'];
        }
        if (isset($map['ReqHitRate'])) {
            $model->reqHitRate = $map['ReqHitRate'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
