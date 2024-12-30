<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorAgg;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorDetails;
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
    protected $_name = [
        'operatorAgg'     => 'OperatorAgg',
        'operatorDetails' => 'OperatorDetails',
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

        return $model;
    }
}
