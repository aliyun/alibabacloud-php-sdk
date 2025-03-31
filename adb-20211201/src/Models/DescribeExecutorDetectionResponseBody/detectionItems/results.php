<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorAgg;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorDetails;

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
        'operatorAgg' => 'OperatorAgg',
        'operatorDetails' => 'OperatorDetails',
    ];

    public function validate()
    {
        if (\is_array($this->operatorAgg)) {
            Model::validateArray($this->operatorAgg);
        }
        if (\is_array($this->operatorDetails)) {
            Model::validateArray($this->operatorDetails);
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
                    $res['OperatorAgg'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->operatorDetails) {
            if (\is_array($this->operatorDetails)) {
                $res['OperatorDetails'] = [];
                $n1 = 0;
                foreach ($this->operatorDetails as $item1) {
                    $res['OperatorDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->operatorAgg[$n1++] = operatorAgg::fromMap($item1);
                }
            }
        }

        if (isset($map['OperatorDetails'])) {
            if (!empty($map['OperatorDetails'])) {
                $model->operatorDetails = [];
                $n1 = 0;
                foreach ($map['OperatorDetails'] as $item1) {
                    $model->operatorDetails[$n1++] = operatorDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
