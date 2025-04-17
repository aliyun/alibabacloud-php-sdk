<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\UV;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal\VV;

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
        'date' => 'Date',
        'playDuration' => 'PlayDuration',
        'playRange' => 'PlayRange',
        'UV' => 'UV',
        'VV' => 'VV',
    ];

    public function validate()
    {
        if (null !== $this->UV) {
            $this->UV->validate();
        }
        if (null !== $this->VV) {
            $this->VV->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['UV'] = null !== $this->UV ? $this->UV->toArray($noStream) : $this->UV;
        }

        if (null !== $this->VV) {
            $res['VV'] = null !== $this->VV ? $this->VV->toArray($noStream) : $this->VV;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
