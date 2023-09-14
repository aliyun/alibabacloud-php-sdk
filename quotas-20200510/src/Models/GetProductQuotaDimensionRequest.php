<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest\dependentDimensions;
use AlibabaCloud\Tea\Model;

class GetProductQuotaDimensionRequest extends Model
{
    /**
     * @description The information about quota dimensions.
     *
     * @var dependentDimensions[]
     */
    public $dependentDimensions;

    /**
     * @description The key of the quota dimension.
     *
     * @example regionId
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example ecs-spec
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'dependentDimensions' => 'DependentDimensions',
        'dimensionKey'        => 'DimensionKey',
        'productCode'         => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependentDimensions) {
            $res['DependentDimensions'] = [];
            if (null !== $this->dependentDimensions && \is_array($this->dependentDimensions)) {
                $n = 0;
                foreach ($this->dependentDimensions as $item) {
                    $res['DependentDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetProductQuotaDimensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = [];
                $n                          = 0;
                foreach ($map['DependentDimensions'] as $item) {
                    $model->dependentDimensions[$n++] = null !== $item ? dependentDimensions::fromMap($item) : $item;
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
