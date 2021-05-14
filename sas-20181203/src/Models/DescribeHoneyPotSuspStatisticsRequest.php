<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHoneyPotSuspStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $statisticsKeyType;

    /**
     * @var int
     */
    public $statisticsDays;
    protected $_name = [
        'from'              => 'From',
        'statisticsKeyType' => 'StatisticsKeyType',
        'statisticsDays'    => 'StatisticsDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->statisticsKeyType) {
            $res['StatisticsKeyType'] = $this->statisticsKeyType;
        }
        if (null !== $this->statisticsDays) {
            $res['StatisticsDays'] = $this->statisticsDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHoneyPotSuspStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['StatisticsKeyType'])) {
            $model->statisticsKeyType = $map['StatisticsKeyType'];
        }
        if (isset($map['StatisticsDays'])) {
            $model->statisticsDays = $map['StatisticsDays'];
        }

        return $model;
    }
}
