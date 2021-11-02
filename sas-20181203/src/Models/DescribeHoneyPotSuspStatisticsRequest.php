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
     * @var int
     */
    public $statisticsDays;

    /**
     * @var string
     */
    public $statisticsKeyType;
    protected $_name = [
        'from'              => 'From',
        'statisticsDays'    => 'StatisticsDays',
        'statisticsKeyType' => 'StatisticsKeyType',
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
        if (null !== $this->statisticsDays) {
            $res['StatisticsDays'] = $this->statisticsDays;
        }
        if (null !== $this->statisticsKeyType) {
            $res['StatisticsKeyType'] = $this->statisticsKeyType;
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
        if (isset($map['StatisticsDays'])) {
            $model->statisticsDays = $map['StatisticsDays'];
        }
        if (isset($map['StatisticsKeyType'])) {
            $model->statisticsKeyType = $map['StatisticsKeyType'];
        }

        return $model;
    }
}
