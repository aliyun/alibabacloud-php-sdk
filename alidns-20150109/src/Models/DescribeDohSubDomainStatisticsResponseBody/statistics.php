<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The timestamp.
     *
     * @example 1544976000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The total number of requests.
     *
     * @example 3141592653
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of IPv4-based HTTP requests.
     *
     * @example 3141592653
     *
     * @var int
     */
    public $v4HttpCount;

    /**
     * @description The number of IPv4-based HTTPS requests.
     *
     * @example 3141592653
     *
     * @var int
     */
    public $v4HttpsCount;

    /**
     * @description The number of IPv6-based HTTP requests.
     *
     * @example 3141592653
     *
     * @var int
     */
    public $v6HttpCount;

    /**
     * @description The number of IPv6-based HTTPS requests.
     *
     * @example 3141592653
     *
     * @var int
     */
    public $v6HttpsCount;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'totalCount' => 'TotalCount',
        'v4HttpCount' => 'V4HttpCount',
        'v4HttpsCount' => 'V4HttpsCount',
        'v6HttpCount' => 'V6HttpCount',
        'v6HttpsCount' => 'V6HttpsCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->v4HttpCount) {
            $res['V4HttpCount'] = $this->v4HttpCount;
        }
        if (null !== $this->v4HttpsCount) {
            $res['V4HttpsCount'] = $this->v4HttpsCount;
        }
        if (null !== $this->v6HttpCount) {
            $res['V6HttpCount'] = $this->v6HttpCount;
        }
        if (null !== $this->v6HttpsCount) {
            $res['V6HttpsCount'] = $this->v6HttpsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['V4HttpCount'])) {
            $model->v4HttpCount = $map['V4HttpCount'];
        }
        if (isset($map['V4HttpsCount'])) {
            $model->v4HttpsCount = $map['V4HttpsCount'];
        }
        if (isset($map['V6HttpCount'])) {
            $model->v6HttpCount = $map['V6HttpCount'];
        }
        if (isset($map['V6HttpsCount'])) {
            $model->v6HttpsCount = $map['V6HttpsCount'];
        }

        return $model;
    }
}
