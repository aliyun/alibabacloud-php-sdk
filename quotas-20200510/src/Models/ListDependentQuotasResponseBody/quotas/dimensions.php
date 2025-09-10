<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponseBody\quotas;

use AlibabaCloud\Dara\Model;

class dimensions extends Model
{
    /**
     * @var string[]
     */
    public $dependentDimension;

    /**
     * @var string
     */
    public $dimensionKey;

    /**
     * @var string[]
     */
    public $dimensionValues;
    protected $_name = [
        'dependentDimension' => 'DependentDimension',
        'dimensionKey' => 'DimensionKey',
        'dimensionValues' => 'DimensionValues',
    ];

    public function validate()
    {
        if (\is_array($this->dependentDimension)) {
            Model::validateArray($this->dependentDimension);
        }
        if (\is_array($this->dimensionValues)) {
            Model::validateArray($this->dimensionValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependentDimension) {
            if (\is_array($this->dependentDimension)) {
                $res['DependentDimension'] = [];
                $n1 = 0;
                foreach ($this->dependentDimension as $item1) {
                    $res['DependentDimension'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }

        if (null !== $this->dimensionValues) {
            if (\is_array($this->dimensionValues)) {
                $res['DimensionValues'] = [];
                $n1 = 0;
                foreach ($this->dimensionValues as $item1) {
                    $res['DimensionValues'][$n1] = $item1;
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
        if (isset($map['DependentDimension'])) {
            if (!empty($map['DependentDimension'])) {
                $model->dependentDimension = [];
                $n1 = 0;
                foreach ($map['DependentDimension'] as $item1) {
                    $model->dependentDimension[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }

        if (isset($map['DimensionValues'])) {
            if (!empty($map['DimensionValues'])) {
                $model->dimensionValues = [];
                $n1 = 0;
                foreach ($map['DimensionValues'] as $item1) {
                    $model->dimensionValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
