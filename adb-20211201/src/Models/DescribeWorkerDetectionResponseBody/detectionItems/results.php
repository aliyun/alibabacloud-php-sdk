<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorAgg;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorDetails;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\partitionedTables;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\skewedTables;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\topAccessTables;
use AlibabaCloud\Tea\Model;

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
        'operatorAgg'       => 'OperatorAgg',
        'operatorDetails'   => 'OperatorDetails',
        'partitionedTables' => 'PartitionedTables',
        'skewedTables'      => 'SkewedTables',
        'topAccessTables'   => 'TopAccessTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorAgg) {
            $res['OperatorAgg'] = [];
            if (null !== $this->operatorAgg && \is_array($this->operatorAgg)) {
                $n = 0;
                foreach ($this->operatorAgg as $item) {
                    $res['OperatorAgg'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operatorDetails) {
            $res['OperatorDetails'] = [];
            if (null !== $this->operatorDetails && \is_array($this->operatorDetails)) {
                $n = 0;
                foreach ($this->operatorDetails as $item) {
                    $res['OperatorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->partitionedTables) {
            $res['PartitionedTables'] = [];
            if (null !== $this->partitionedTables && \is_array($this->partitionedTables)) {
                $n = 0;
                foreach ($this->partitionedTables as $item) {
                    $res['PartitionedTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skewedTables) {
            $res['SkewedTables'] = [];
            if (null !== $this->skewedTables && \is_array($this->skewedTables)) {
                $n = 0;
                foreach ($this->skewedTables as $item) {
                    $res['SkewedTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topAccessTables) {
            $res['TopAccessTables'] = [];
            if (null !== $this->topAccessTables && \is_array($this->topAccessTables)) {
                $n = 0;
                foreach ($this->topAccessTables as $item) {
                    $res['TopAccessTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorAgg'])) {
            if (!empty($map['OperatorAgg'])) {
                $model->operatorAgg = [];
                $n                  = 0;
                foreach ($map['OperatorAgg'] as $item) {
                    $model->operatorAgg[$n++] = null !== $item ? operatorAgg::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperatorDetails'])) {
            if (!empty($map['OperatorDetails'])) {
                $model->operatorDetails = [];
                $n                      = 0;
                foreach ($map['OperatorDetails'] as $item) {
                    $model->operatorDetails[$n++] = null !== $item ? operatorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PartitionedTables'])) {
            if (!empty($map['PartitionedTables'])) {
                $model->partitionedTables = [];
                $n                        = 0;
                foreach ($map['PartitionedTables'] as $item) {
                    $model->partitionedTables[$n++] = null !== $item ? partitionedTables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkewedTables'])) {
            if (!empty($map['SkewedTables'])) {
                $model->skewedTables = [];
                $n                   = 0;
                foreach ($map['SkewedTables'] as $item) {
                    $model->skewedTables[$n++] = null !== $item ? skewedTables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopAccessTables'])) {
            if (!empty($map['TopAccessTables'])) {
                $model->topAccessTables = [];
                $n                      = 0;
                foreach ($map['TopAccessTables'] as $item) {
                    $model->topAccessTables[$n++] = null !== $item ? topAccessTables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
