<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetExpenseSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $forecastFluency;

    /**
     * @var int
     */
    public $topBandwidth;

    /**
     * @var int
     */
    public $totalTraffic;

    /**
     * @var float
     */
    public $coverRate;

    /**
     * @var float
     */
    public $shareRate;

    /**
     * @var int
     */
    public $totalUV;
    protected $_name = [
        'forecastFluency' => 'ForecastFluency',
        'topBandwidth'    => 'TopBandwidth',
        'totalTraffic'    => 'TotalTraffic',
        'coverRate'       => 'CoverRate',
        'shareRate'       => 'ShareRate',
        'totalUV'         => 'TotalUV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forecastFluency) {
            $res['ForecastFluency'] = $this->forecastFluency;
        }
        if (null !== $this->topBandwidth) {
            $res['TopBandwidth'] = $this->topBandwidth;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->coverRate) {
            $res['CoverRate'] = $this->coverRate;
        }
        if (null !== $this->shareRate) {
            $res['ShareRate'] = $this->shareRate;
        }
        if (null !== $this->totalUV) {
            $res['TotalUV'] = $this->totalUV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForecastFluency'])) {
            $model->forecastFluency = $map['ForecastFluency'];
        }
        if (isset($map['TopBandwidth'])) {
            $model->topBandwidth = $map['TopBandwidth'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['CoverRate'])) {
            $model->coverRate = $map['CoverRate'];
        }
        if (isset($map['ShareRate'])) {
            $model->shareRate = $map['ShareRate'];
        }
        if (isset($map['TotalUV'])) {
            $model->totalUV = $map['TotalUV'];
        }

        return $model;
    }
}
