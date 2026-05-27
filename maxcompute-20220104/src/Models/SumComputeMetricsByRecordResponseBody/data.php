<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumComputeMetricsByRecordResponseBody\data\dailyComputeRecords;

class data extends Model
{
    /**
     * @var dailyComputeRecords[]
     */
    public $dailyComputeRecords;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dailyComputeRecords' => 'dailyComputeRecords',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dailyComputeRecords)) {
            Model::validateArray($this->dailyComputeRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyComputeRecords) {
            if (\is_array($this->dailyComputeRecords)) {
                $res['dailyComputeRecords'] = [];
                $n1 = 0;
                foreach ($this->dailyComputeRecords as $item1) {
                    $res['dailyComputeRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dailyComputeRecords'])) {
            if (!empty($map['dailyComputeRecords'])) {
                $model->dailyComputeRecords = [];
                $n1 = 0;
                foreach ($map['dailyComputeRecords'] as $item1) {
                    $model->dailyComputeRecords[$n1] = dailyComputeRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
