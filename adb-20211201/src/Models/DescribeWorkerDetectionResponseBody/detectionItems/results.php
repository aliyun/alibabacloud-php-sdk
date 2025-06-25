<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorAgg;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorDetails;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\partitionedTables;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\skewedTables;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\topAccessTables;

class results extends Model
{
    /**
     * @var operatorAgg[]
     */
    public $operatorAgg;

    /**
     * @var operatorDetails[]
     */
    public $operatorDetails;

    /**
     * @var partitionedTables[]
     */
    public $partitionedTables;

    /**
     * @var skewedTables[]
     */
    public $skewedTables;

    /**
     * @var topAccessTables[]
     */
    public $topAccessTables;
    protected $_name = [
        'operatorAgg' => 'OperatorAgg',
        'operatorDetails' => 'OperatorDetails',
        'partitionedTables' => 'PartitionedTables',
        'skewedTables' => 'SkewedTables',
        'topAccessTables' => 'TopAccessTables',
    ];

    public function validate()
    {
        if (\is_array($this->operatorAgg)) {
            Model::validateArray($this->operatorAgg);
        }
        if (\is_array($this->operatorDetails)) {
            Model::validateArray($this->operatorDetails);
        }
        if (\is_array($this->partitionedTables)) {
            Model::validateArray($this->partitionedTables);
        }
        if (\is_array($this->skewedTables)) {
            Model::validateArray($this->skewedTables);
        }
        if (\is_array($this->topAccessTables)) {
            Model::validateArray($this->topAccessTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatorAgg) {
            if (\is_array($this->operatorAgg)) {
                $res['OperatorAgg'] = [];
                $n1 = 0;
                foreach ($this->operatorAgg as $item1) {
                    $res['OperatorAgg'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operatorDetails) {
            if (\is_array($this->operatorDetails)) {
                $res['OperatorDetails'] = [];
                $n1 = 0;
                foreach ($this->operatorDetails as $item1) {
                    $res['OperatorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->partitionedTables) {
            if (\is_array($this->partitionedTables)) {
                $res['PartitionedTables'] = [];
                $n1 = 0;
                foreach ($this->partitionedTables as $item1) {
                    $res['PartitionedTables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skewedTables) {
            if (\is_array($this->skewedTables)) {
                $res['SkewedTables'] = [];
                $n1 = 0;
                foreach ($this->skewedTables as $item1) {
                    $res['SkewedTables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topAccessTables) {
            if (\is_array($this->topAccessTables)) {
                $res['TopAccessTables'] = [];
                $n1 = 0;
                foreach ($this->topAccessTables as $item1) {
                    $res['TopAccessTables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['OperatorAgg'])) {
            if (!empty($map['OperatorAgg'])) {
                $model->operatorAgg = [];
                $n1 = 0;
                foreach ($map['OperatorAgg'] as $item1) {
                    $model->operatorAgg[$n1] = operatorAgg::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OperatorDetails'])) {
            if (!empty($map['OperatorDetails'])) {
                $model->operatorDetails = [];
                $n1 = 0;
                foreach ($map['OperatorDetails'] as $item1) {
                    $model->operatorDetails[$n1] = operatorDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PartitionedTables'])) {
            if (!empty($map['PartitionedTables'])) {
                $model->partitionedTables = [];
                $n1 = 0;
                foreach ($map['PartitionedTables'] as $item1) {
                    $model->partitionedTables[$n1] = partitionedTables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkewedTables'])) {
            if (!empty($map['SkewedTables'])) {
                $model->skewedTables = [];
                $n1 = 0;
                foreach ($map['SkewedTables'] as $item1) {
                    $model->skewedTables[$n1] = skewedTables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopAccessTables'])) {
            if (!empty($map['TopAccessTables'])) {
                $model->topAccessTables = [];
                $n1 = 0;
                foreach ($map['TopAccessTables'] as $item1) {
                    $model->topAccessTables[$n1] = topAccessTables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
