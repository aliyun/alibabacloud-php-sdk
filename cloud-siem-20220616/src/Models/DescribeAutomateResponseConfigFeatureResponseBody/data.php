<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data\rightValueEnums;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data\supportOperators;

class data extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var rightValueEnums[]
     */
    public $rightValueEnums;

    /**
     * @var supportOperators[]
     */
    public $supportOperators;
    protected $_name = [
        'dataType' => 'DataType',
        'feature' => 'Feature',
        'rightValueEnums' => 'RightValueEnums',
        'supportOperators' => 'SupportOperators',
    ];

    public function validate()
    {
        if (\is_array($this->rightValueEnums)) {
            Model::validateArray($this->rightValueEnums);
        }
        if (\is_array($this->supportOperators)) {
            Model::validateArray($this->supportOperators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }

        if (null !== $this->rightValueEnums) {
            if (\is_array($this->rightValueEnums)) {
                $res['RightValueEnums'] = [];
                $n1 = 0;
                foreach ($this->rightValueEnums as $item1) {
                    $res['RightValueEnums'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportOperators) {
            if (\is_array($this->supportOperators)) {
                $res['SupportOperators'] = [];
                $n1 = 0;
                foreach ($this->supportOperators as $item1) {
                    $res['SupportOperators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }

        if (isset($map['RightValueEnums'])) {
            if (!empty($map['RightValueEnums'])) {
                $model->rightValueEnums = [];
                $n1 = 0;
                foreach ($map['RightValueEnums'] as $item1) {
                    $model->rightValueEnums[$n1] = rightValueEnums::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportOperators'])) {
            if (!empty($map['SupportOperators'])) {
                $model->supportOperators = [];
                $n1 = 0;
                foreach ($map['SupportOperators'] as $item1) {
                    $model->supportOperators[$n1] = supportOperators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
