<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\SparkOperatorInfo;

class operatorListSortedByMetrics extends Model
{
    /**
     * @var SparkOperatorInfo[]
     */
    public $operatorListSortedByExclusiveTime;

    /**
     * @var SparkOperatorInfo[]
     */
    public $operatorListSortedByMaxMemory;
    protected $_name = [
        'operatorListSortedByExclusiveTime' => 'OperatorListSortedByExclusiveTime',
        'operatorListSortedByMaxMemory' => 'OperatorListSortedByMaxMemory',
    ];

    public function validate()
    {
        if (\is_array($this->operatorListSortedByExclusiveTime)) {
            Model::validateArray($this->operatorListSortedByExclusiveTime);
        }
        if (\is_array($this->operatorListSortedByMaxMemory)) {
            Model::validateArray($this->operatorListSortedByMaxMemory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatorListSortedByExclusiveTime) {
            if (\is_array($this->operatorListSortedByExclusiveTime)) {
                $res['OperatorListSortedByExclusiveTime'] = [];
                $n1 = 0;
                foreach ($this->operatorListSortedByExclusiveTime as $item1) {
                    $res['OperatorListSortedByExclusiveTime'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->operatorListSortedByMaxMemory) {
            if (\is_array($this->operatorListSortedByMaxMemory)) {
                $res['OperatorListSortedByMaxMemory'] = [];
                $n1 = 0;
                foreach ($this->operatorListSortedByMaxMemory as $item1) {
                    $res['OperatorListSortedByMaxMemory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperatorListSortedByExclusiveTime'])) {
            if (!empty($map['OperatorListSortedByExclusiveTime'])) {
                $model->operatorListSortedByExclusiveTime = [];
                $n1 = 0;
                foreach ($map['OperatorListSortedByExclusiveTime'] as $item1) {
                    $model->operatorListSortedByExclusiveTime[$n1++] = SparkOperatorInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['OperatorListSortedByMaxMemory'])) {
            if (!empty($map['OperatorListSortedByMaxMemory'])) {
                $model->operatorListSortedByMaxMemory = [];
                $n1 = 0;
                foreach ($map['OperatorListSortedByMaxMemory'] as $item1) {
                    $model->operatorListSortedByMaxMemory[$n1++] = SparkOperatorInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
