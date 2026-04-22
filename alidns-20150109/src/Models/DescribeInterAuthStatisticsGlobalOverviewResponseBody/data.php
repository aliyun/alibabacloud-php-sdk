<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInterAuthStatisticsGlobalOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $avgSuccessRatio;

    /**
     * @var int
     */
    public $avgSuccessRatioTrend;

    /**
     * @var int
     */
    public $totalResolveCount;

    /**
     * @var int
     */
    public $totalResolveCountTrend;
    protected $_name = [
        'avgSuccessRatio' => 'AvgSuccessRatio',
        'avgSuccessRatioTrend' => 'AvgSuccessRatioTrend',
        'totalResolveCount' => 'TotalResolveCount',
        'totalResolveCountTrend' => 'TotalResolveCountTrend',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgSuccessRatio) {
            $res['AvgSuccessRatio'] = $this->avgSuccessRatio;
        }

        if (null !== $this->avgSuccessRatioTrend) {
            $res['AvgSuccessRatioTrend'] = $this->avgSuccessRatioTrend;
        }

        if (null !== $this->totalResolveCount) {
            $res['TotalResolveCount'] = $this->totalResolveCount;
        }

        if (null !== $this->totalResolveCountTrend) {
            $res['TotalResolveCountTrend'] = $this->totalResolveCountTrend;
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
        if (isset($map['AvgSuccessRatio'])) {
            $model->avgSuccessRatio = $map['AvgSuccessRatio'];
        }

        if (isset($map['AvgSuccessRatioTrend'])) {
            $model->avgSuccessRatioTrend = $map['AvgSuccessRatioTrend'];
        }

        if (isset($map['TotalResolveCount'])) {
            $model->totalResolveCount = $map['TotalResolveCount'];
        }

        if (isset($map['TotalResolveCountTrend'])) {
            $model->totalResolveCountTrend = $map['TotalResolveCountTrend'];
        }

        return $model;
    }
}
