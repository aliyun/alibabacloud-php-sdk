<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\UV;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\VV;
use AlibabaCloud\Tea\Model;

class userPlayStatisTotal extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $playDuration;

    /**
     * @var string
     */
    public $playRange;

    /**
     * @var UV
     */
    public $UV;

    /**
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
