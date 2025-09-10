<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody\quotaDimensions\dimensionValueDetail;

class quotaDimensions extends Model
{
    /**
     * @var string[]
     */
    public $dependentDimensions;

    /**
     * @var string
     */
    public $dimensionKey;

    /**
     * @var dimensionValueDetail[]
     */
    public $dimensionValueDetail;

    /**
     * @var string[]
     */
    public $dimensionValues;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $requisite;
    protected $_name = [
        'dependentDimensions' => 'DependentDimensions',
        'dimensionKey' => 'DimensionKey',
        'dimensionValueDetail' => 'DimensionValueDetail',
        'dimensionValues' => 'DimensionValues',
        'name' => 'Name',
        'requisite' => 'Requisite',
    ];

    public function validate()
    {
        if (\is_array($this->dependentDimensions)) {
            Model::validateArray($this->dependentDimensions);
        }
        if (\is_array($this->dimensionValueDetail)) {
            Model::validateArray($this->dimensionValueDetail);
        }
        if (\is_array($this->dimensionValues)) {
            Model::validateArray($this->dimensionValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependentDimensions) {
            if (\is_array($this->dependentDimensions)) {
                $res['DependentDimensions'] = [];
                $n1 = 0;
                foreach ($this->dependentDimensions as $item1) {
                    $res['DependentDimensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }

        if (null !== $this->dimensionValueDetail) {
            if (\is_array($this->dimensionValueDetail)) {
                $res['DimensionValueDetail'] = [];
                $n1 = 0;
                foreach ($this->dimensionValueDetail as $item1) {
                    $res['DimensionValueDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requisite) {
            $res['Requisite'] = $this->requisite;
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
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = [];
                $n1 = 0;
                foreach ($map['DependentDimensions'] as $item1) {
                    $model->dependentDimensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }

        if (isset($map['DimensionValueDetail'])) {
            if (!empty($map['DimensionValueDetail'])) {
                $model->dimensionValueDetail = [];
                $n1 = 0;
                foreach ($map['DimensionValueDetail'] as $item1) {
                    $model->dimensionValueDetail[$n1] = dimensionValueDetail::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Requisite'])) {
            $model->requisite = $map['Requisite'];
        }

        return $model;
    }
}
