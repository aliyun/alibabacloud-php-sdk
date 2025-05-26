<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableStatisticsResponseBody\items\tableStatisticRecords;

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
        if (\is_array($this->tableStatisticRecords)) {
            Model::validateArray($this->tableStatisticRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableStatisticRecords) {
            if (\is_array($this->tableStatisticRecords)) {
                $res['TableStatisticRecords'] = [];
                $n1 = 0;
                foreach ($this->tableStatisticRecords as $item1) {
                    $res['TableStatisticRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TableStatisticRecords'])) {
            if (!empty($map['TableStatisticRecords'])) {
                $model->tableStatisticRecords = [];
                $n1 = 0;
                foreach ($map['TableStatisticRecords'] as $item1) {
                    $model->tableStatisticRecords[$n1++] = tableStatisticRecords::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
