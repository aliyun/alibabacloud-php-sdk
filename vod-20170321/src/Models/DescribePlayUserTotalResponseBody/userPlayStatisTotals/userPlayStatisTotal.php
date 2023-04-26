<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\UV;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\VV;
use AlibabaCloud\Tea\Model;

class userPlayStatisTotal extends Model
{
    /**
     * @description The total number of unique visitors who use ApsaraVideo Player SDK for HTML5.
     *
     * @example 20170120
     *
     * @var string
     */
    public $date;

    /**
     * @description The operation that you want to perform. Set the value to **DescribePlayUserTotal**.
     *
     * @example 9340070
     *
     * @var string
     */
    public $playDuration;

    /**
     * @description The date when the statistics were generated. The date follows the *yyyy-MM-dd* format.
     *
     * @example "<=1m:74.3%;>1<=5m:22.8%;>5<=10m:1.0%;>10<=15m:1.0%;>15<=30m:1.0%"
     *
     * @var string
     */
    public $playRange;

    /**
     * @description The ID of the request.
     *
     * @var UV
     */
    public $UV;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @var VV
     */
    public $VV;
    protected $_name = [
        'date'         => 'Date',
        'playDuration' => 'PlayDuration',
        'playRange'    => 'PlayRange',
        'UV'           => 'UV',
        'VV'           => 'VV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->playRange) {
            $res['PlayRange'] = $this->playRange;
        }
        if (null !== $this->UV) {
            $res['UV'] = null !== $this->UV ? $this->UV->toMap() : null;
        }
        if (null !== $this->VV) {
            $res['VV'] = null !== $this->VV ? $this->VV->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPlayStatisTotal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['PlayRange'])) {
            $model->playRange = $map['PlayRange'];
        }
        if (isset($map['UV'])) {
            $model->UV = UV::fromMap($map['UV']);
        }
        if (isset($map['VV'])) {
            $model->VV = VV::fromMap($map['VV']);
        }

        return $model;
    }
}
