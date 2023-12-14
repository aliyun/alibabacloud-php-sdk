<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data\rightValueEnums;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data\supportOperators;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data type of the condition field in the automated response rule.
     *
     * @example varchar
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The name of the condition field in the automated response rule.
     *
     * @example alert_desc
     *
     * @var string
     */
    public $feature;

    /**
     * @description The enumerated values of the right operand for the field.
     *
     * @var rightValueEnums[]
     */
    public $rightValueEnums;

    /**
     * @description The operators that are supported for the condition field.
     *
     * @var supportOperators[]
     */
    public $supportOperators;
    protected $_name = [
        'dataType'         => 'DataType',
        'feature'          => 'Feature',
        'rightValueEnums'  => 'RightValueEnums',
        'supportOperators' => 'SupportOperators',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->rightValueEnums) {
            $res['RightValueEnums'] = [];
            if (null !== $this->rightValueEnums && \is_array($this->rightValueEnums)) {
                $n = 0;
                foreach ($this->rightValueEnums as $item) {
                    $res['RightValueEnums'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportOperators) {
            $res['SupportOperators'] = [];
            if (null !== $this->supportOperators && \is_array($this->supportOperators)) {
                $n = 0;
                foreach ($this->supportOperators as $item) {
                    $res['SupportOperators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['RightValueEnums'])) {
            if (!empty($map['RightValueEnums'])) {
                $model->rightValueEnums = [];
                $n                      = 0;
                foreach ($map['RightValueEnums'] as $item) {
                    $model->rightValueEnums[$n++] = null !== $item ? rightValueEnums::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportOperators'])) {
            if (!empty($map['SupportOperators'])) {
                $model->supportOperators = [];
                $n                       = 0;
                foreach ($map['SupportOperators'] as $item) {
                    $model->supportOperators[$n++] = null !== $item ? supportOperators::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
