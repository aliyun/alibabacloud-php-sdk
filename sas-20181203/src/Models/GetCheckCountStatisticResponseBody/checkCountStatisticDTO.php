<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO\checkCountStatisticItems;
use AlibabaCloud\Tea\Model;

class checkCountStatisticDTO extends Model
{
    /**
     * @description Risk item count statistics results.
     *
     * @var checkCountStatisticItems[]
     */
    public $checkCountStatisticItems;

    /**
     * @description The type of data statistics. Values:
     * - **user**: Top 5 over-authorized users.
     * - **role**: Top 5 over-authorized roles.
     * - **instance**: Top 5 risky cloud products.
     * @example instance
     *
     * @var string
     */
    public $statisticType;
    protected $_name = [
        'checkCountStatisticItems' => 'CheckCountStatisticItems',
        'statisticType'            => 'StatisticType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkCountStatisticItems) {
            $res['CheckCountStatisticItems'] = [];
            if (null !== $this->checkCountStatisticItems && \is_array($this->checkCountStatisticItems)) {
                $n = 0;
                foreach ($this->checkCountStatisticItems as $item) {
                    $res['CheckCountStatisticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkCountStatisticDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckCountStatisticItems'])) {
            if (!empty($map['CheckCountStatisticItems'])) {
                $model->checkCountStatisticItems = [];
                $n                               = 0;
                foreach ($map['CheckCountStatisticItems'] as $item) {
                    $model->checkCountStatisticItems[$n++] = null !== $item ? checkCountStatisticItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }

        return $model;
    }
}
