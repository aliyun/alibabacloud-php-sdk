<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class honeypotAttackStatistics extends Model
{
    /**
     * @var int
     */
    public $statisticsCount;

    /**
     * @var string
     */
    public $statisticsValue;
    protected $_name = [
        'statisticsCount' => 'StatisticsCount',
        'statisticsValue' => 'StatisticsValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statisticsCount) {
            $res['StatisticsCount'] = $this->statisticsCount;
        }

        if (null !== $this->statisticsValue) {
            $res['StatisticsValue'] = $this->statisticsValue;
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
        if (isset($map['StatisticsCount'])) {
            $model->statisticsCount = $map['StatisticsCount'];
        }

        if (isset($map['StatisticsValue'])) {
            $model->statisticsValue = $map['StatisticsValue'];
        }

        return $model;
    }
}
