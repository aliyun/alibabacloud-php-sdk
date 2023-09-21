<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotAttackStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class honeypotAttackStatistics extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $statisticsCount;

    /**
     * @example 112.168.1.**
     *
     * @var string
     */
    public $statisticsValue;
    protected $_name = [
        'statisticsCount' => 'StatisticsCount',
        'statisticsValue' => 'StatisticsValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return honeypotAttackStatistics
     */
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
