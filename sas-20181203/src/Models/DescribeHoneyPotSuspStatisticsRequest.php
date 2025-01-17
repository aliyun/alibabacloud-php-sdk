<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeHoneyPotSuspStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $from;
    /**
     * @var string
     */
    public $lang;
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
        'lang'              => 'Lang',
        'statisticsDays'    => 'StatisticsDays',
        'statisticsKeyType' => 'StatisticsKeyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->statisticsDays) {
            $res['StatisticsDays'] = $this->statisticsDays;
        }

        if (null !== $this->statisticsKeyType) {
            $res['StatisticsKeyType'] = $this->statisticsKeyType;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
