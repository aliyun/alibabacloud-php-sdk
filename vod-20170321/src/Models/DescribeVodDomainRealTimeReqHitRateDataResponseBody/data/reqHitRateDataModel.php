<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class reqHitRateDataModel extends Model
{
    /**
     * @description The cache hit ratio that is calculated based on requests. The cache hit ratio is measured in percentage.
     *
     * @example 0.8956940476262277
     *
     * @var float
     */
    public $reqHitRate;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard. The time is displayed in UTC.
     *
     * @example 2024-01-02T11:26:00Z
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
