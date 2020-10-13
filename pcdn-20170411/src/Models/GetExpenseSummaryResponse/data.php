<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetExpenseSummaryResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalTraffic;

    /**
     * @var int
     */
    public $totalUV;

    /**
     * @var float
     */
    public $shareRate;

    /**
     * @var float
     */
    public $coverRate;

    /**
     * @var float
     */
    public $forecastFluency;

    /**
     * @var int
     */
    public $topBandwidth;
    protected $_name = [
        'totalTraffic'    => 'TotalTraffic',
        'totalUV'         => 'TotalUV',
        'shareRate'       => 'ShareRate',
        'coverRate'       => 'CoverRate',
        'forecastFluency' => 'ForecastFluency',
        'topBandwidth'    => 'TopBandwidth',
    ];

    public function validate()
    {
        Model::validateRequired('totalTraffic', $this->totalTraffic, true);
        Model::validateRequired('totalUV', $this->totalUV, true);
        Model::validateRequired('shareRate', $this->shareRate, true);
        Model::validateRequired('coverRate', $this->coverRate, true);
        Model::validateRequired('forecastFluency', $this->forecastFluency, true);
        Model::validateRequired('topBandwidth', $this->topBandwidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->totalUV) {
            $res['TotalUV'] = $this->totalUV;
        }
        if (null !== $this->shareRate) {
            $res['ShareRate'] = $this->shareRate;
        }
        if (null !== $this->coverRate) {
            $res['CoverRate'] = $this->coverRate;
        }
        if (null !== $this->forecastFluency) {
            $res['ForecastFluency'] = $this->forecastFluency;
        }
        if (null !== $this->topBandwidth) {
            $res['TopBandwidth'] = $this->topBandwidth;
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
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['TotalUV'])) {
            $model->totalUV = $map['TotalUV'];
        }
        if (isset($map['ShareRate'])) {
            $model->shareRate = $map['ShareRate'];
        }
        if (isset($map['CoverRate'])) {
            $model->coverRate = $map['CoverRate'];
        }
        if (isset($map['ForecastFluency'])) {
            $model->forecastFluency = $map['ForecastFluency'];
        }
        if (isset($map['TopBandwidth'])) {
            $model->topBandwidth = $map['TopBandwidth'];
        }

        return $model;
    }
}
