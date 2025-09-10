<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest\dependentDimensions;

class GetProductQuotaDimensionRequest extends Model
{
    /**
     * @var dependentDimensions[]
     */
    public $dependentDimensions;

    /**
     * @var string
     */
    public $dimensionKey;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'dependentDimensions' => 'DependentDimensions',
        'dimensionKey' => 'DimensionKey',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        if (\is_array($this->dependentDimensions)) {
            Model::validateArray($this->dependentDimensions);
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
                    $res['DependentDimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
                    $model->dependentDimensions[$n1] = dependentDimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
