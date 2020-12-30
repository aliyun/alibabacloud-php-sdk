<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest\dependentDimensions;
use AlibabaCloud\Tea\Model;

class GetProductQuotaDimensionRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $dimensionKey;

    /**
     * @var dependentDimensions[]
     */
    public $dependentDimensions;
    protected $_name = [
        'productCode'         => 'ProductCode',
        'dimensionKey'        => 'DimensionKey',
        'dependentDimensions' => 'DependentDimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dependentDimensions) {
            $res['DependentDimensions'] = [];
            if (null !== $this->dependentDimensions && \is_array($this->dependentDimensions)) {
                $n = 0;
                foreach ($this->dependentDimensions as $item) {
                    $res['DependentDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductQuotaDimensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = [];
                $n                          = 0;
                foreach ($map['DependentDimensions'] as $item) {
                    $model->dependentDimensions[$n++] = null !== $item ? dependentDimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
