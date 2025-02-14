<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO\timeDimensionStatisticItems;

class timeDimensionStatisticDTO extends Model
{
    /**
     * @var int[]
     */
    public $dates;
    /**
     * @var string
     */
    public $statisticType;
    /**
     * @var timeDimensionStatisticItems[]
     */
    public $timeDimensionStatisticItems;
    protected $_name = [
        'dates'                       => 'Dates',
        'statisticType'               => 'StatisticType',
        'timeDimensionStatisticItems' => 'TimeDimensionStatisticItems',
    ];

    public function validate()
    {
        if (\is_array($this->dates)) {
            Model::validateArray($this->dates);
        }
        if (\is_array($this->timeDimensionStatisticItems)) {
            Model::validateArray($this->timeDimensionStatisticItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dates) {
            if (\is_array($this->dates)) {
                $res['Dates'] = [];
                $n1           = 0;
                foreach ($this->dates as $item1) {
                    $res['Dates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }

        if (null !== $this->timeDimensionStatisticItems) {
            if (\is_array($this->timeDimensionStatisticItems)) {
                $res['TimeDimensionStatisticItems'] = [];
                $n1                                 = 0;
                foreach ($this->timeDimensionStatisticItems as $item1) {
                    $res['TimeDimensionStatisticItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dates'])) {
            if (!empty($map['Dates'])) {
                $model->dates = [];
                $n1           = 0;
                foreach ($map['Dates'] as $item1) {
                    $model->dates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }

        if (isset($map['TimeDimensionStatisticItems'])) {
            if (!empty($map['TimeDimensionStatisticItems'])) {
                $model->timeDimensionStatisticItems = [];
                $n1                                 = 0;
                foreach ($map['TimeDimensionStatisticItems'] as $item1) {
                    $model->timeDimensionStatisticItems[$n1++] = timeDimensionStatisticItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
