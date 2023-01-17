<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHitRateDataResponseBody\hitRatePerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $byteHitRate;

    /**
     * @example 0
     *
     * @var string
     */
    public $reqHitRate;

    /**
     * @example 2018-03-02T15:00:00Z
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
