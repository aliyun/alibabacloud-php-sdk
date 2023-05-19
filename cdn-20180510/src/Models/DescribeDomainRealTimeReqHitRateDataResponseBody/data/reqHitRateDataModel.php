<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeReqHitRateDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class reqHitRateDataModel extends Model
{
    /**
     * @description The timestamp. The time follows the ISO 8601 standard. The time is displayed in UTC.
     *
     * @example 0.8956940476262277
     *
     * @var float
     */
    public $reqHitRate;

    /**
     * @description Queries the request hit ratios for one or more accelerated domain names.
     *
     * @example 2018-01-02T11:26:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'reqHitRate' => 'ReqHitRate',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return reqHitRateDataModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReqHitRate'])) {
            $model->reqHitRate = $map['ReqHitRate'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
