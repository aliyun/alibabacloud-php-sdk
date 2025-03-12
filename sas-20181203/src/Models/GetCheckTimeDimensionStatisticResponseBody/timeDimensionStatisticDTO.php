<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO\timeDimensionStatisticItems;
use AlibabaCloud\Tea\Model;

class timeDimensionStatisticDTO extends Model
{
    /**
     * @description List of data time points.
     *
     * @var int[]
     */
    public $dates;

    /**
     * @description Type of statistical data. Values:
     * - **CheckPassRate**: Check item pass rate.
     * - **AssetPassRate**: Asset pass rate.
     * @example CheckPassRate
     *
     * @var string
     */
    public $statisticType;

    /**
     * @description Time trend statistical data results.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dates) {
            $res['Dates'] = $this->dates;
        }
        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }
        if (null !== $this->timeDimensionStatisticItems) {
            $res['TimeDimensionStatisticItems'] = [];
            if (null !== $this->timeDimensionStatisticItems && \is_array($this->timeDimensionStatisticItems)) {
                $n = 0;
                foreach ($this->timeDimensionStatisticItems as $item) {
                    $res['TimeDimensionStatisticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeDimensionStatisticDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dates'])) {
            if (!empty($map['Dates'])) {
                $model->dates = $map['Dates'];
            }
        }
        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }
        if (isset($map['TimeDimensionStatisticItems'])) {
            if (!empty($map['TimeDimensionStatisticItems'])) {
                $model->timeDimensionStatisticItems = [];
                $n                                  = 0;
                foreach ($map['TimeDimensionStatisticItems'] as $item) {
                    $model->timeDimensionStatisticItems[$n++] = null !== $item ? timeDimensionStatisticItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
