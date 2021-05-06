<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items\tableStatisticRecords;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var tableStatisticRecords[]
     */
    public $tableStatisticRecords;
    protected $_name = [
        'tableStatisticRecords' => 'TableStatisticRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableStatisticRecords) {
            $res['TableStatisticRecords'] = [];
            if (null !== $this->tableStatisticRecords && \is_array($this->tableStatisticRecords)) {
                $n = 0;
                foreach ($this->tableStatisticRecords as $item) {
                    $res['TableStatisticRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableStatisticRecords'])) {
            if (!empty($map['TableStatisticRecords'])) {
                $model->tableStatisticRecords = [];
                $n                            = 0;
                foreach ($map['TableStatisticRecords'] as $item) {
                    $model->tableStatisticRecords[$n++] = null !== $item ? tableStatisticRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
