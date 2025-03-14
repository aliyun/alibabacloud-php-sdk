<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO\timeDimensionStatisticItems\statisticDatas;
use AlibabaCloud\Tea\Model;

class timeDimensionStatisticItems extends Model
{
    /**
     * @description Data time, in timestamp format.
     *
     * @example 1712592000000
     *
     * @var int
     */
    public $dataTime;

    /**
     * @description List of statistical data.
     *
     * @var statisticDatas[]
     */
    public $statisticDatas;
    protected $_name = [
        'dataTime' => 'DataTime',
        'statisticDatas' => 'StatisticDatas',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->statisticDatas) {
            $res['StatisticDatas'] = [];
            if (null !== $this->statisticDatas && \is_array($this->statisticDatas)) {
                $n = 0;
                foreach ($this->statisticDatas as $item) {
                    $res['StatisticDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeDimensionStatisticItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['StatisticDatas'])) {
            if (!empty($map['StatisticDatas'])) {
                $model->statisticDatas = [];
                $n = 0;
                foreach ($map['StatisticDatas'] as $item) {
                    $model->statisticDatas[$n++] = null !== $item ? statisticDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
