<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeReportDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $heathScore;

    /**
     * @var int[]
     */
    public $heathScoreTrendList;

    /**
     * @var string
     */
    public $preUpdateTime;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int[]
     */
    public $riskCountTrendList;
    protected $_name = [
        'heathScore'          => 'HeathScore',
        'heathScoreTrendList' => 'HeathScoreTrendList',
        'preUpdateTime'       => 'PreUpdateTime',
        'riskCount'           => 'RiskCount',
        'riskCountTrendList'  => 'RiskCountTrendList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->heathScore) {
            $res['HeathScore'] = $this->heathScore;
        }
        if (null !== $this->heathScoreTrendList) {
            $res['HeathScoreTrendList'] = $this->heathScoreTrendList;
        }
        if (null !== $this->preUpdateTime) {
            $res['PreUpdateTime'] = $this->preUpdateTime;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->riskCountTrendList) {
            $res['RiskCountTrendList'] = $this->riskCountTrendList;
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
        if (isset($map['HeathScore'])) {
            $model->heathScore = $map['HeathScore'];
        }
        if (isset($map['HeathScoreTrendList'])) {
            if (!empty($map['HeathScoreTrendList'])) {
                $model->heathScoreTrendList = $map['HeathScoreTrendList'];
            }
        }
        if (isset($map['PreUpdateTime'])) {
            $model->preUpdateTime = $map['PreUpdateTime'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['RiskCountTrendList'])) {
            if (!empty($map['RiskCountTrendList'])) {
                $model->riskCountTrendList = $map['RiskCountTrendList'];
            }
        }

        return $model;
    }
}
