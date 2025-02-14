<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO\timeDimensionStatisticItems\statisticDatas;

class timeDimensionStatisticItems extends Model
{
    /**
     * @var int
     */
    public $dataTime;
    /**
     * @var statisticDatas[]
     */
    public $statisticDatas;
    protected $_name = [
        'dataTime'       => 'DataTime',
        'statisticDatas' => 'StatisticDatas',
    ];

    public function validate()
    {
        if (\is_array($this->statisticDatas)) {
            Model::validateArray($this->statisticDatas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }

        if (null !== $this->statisticDatas) {
            if (\is_array($this->statisticDatas)) {
                $res['StatisticDatas'] = [];
                $n1                    = 0;
                foreach ($this->statisticDatas as $item1) {
                    $res['StatisticDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }

        if (isset($map['StatisticDatas'])) {
            if (!empty($map['StatisticDatas'])) {
                $model->statisticDatas = [];
                $n1                    = 0;
                foreach ($map['StatisticDatas'] as $item1) {
                    $model->statisticDatas[$n1++] = statisticDatas::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
