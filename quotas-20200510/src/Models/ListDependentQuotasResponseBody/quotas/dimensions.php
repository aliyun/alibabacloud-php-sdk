<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponseBody\quotas;

use AlibabaCloud\Tea\Model;

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
        'dimensionKey'       => 'DimensionKey',
        'dimensionValues'    => 'DimensionValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependentDimension) {
            $res['DependentDimension'] = $this->dependentDimension;
        }
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dimensionValues) {
            $res['DimensionValues'] = $this->dimensionValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependentDimension'])) {
            if (!empty($map['DependentDimension'])) {
                $model->dependentDimension = $map['DependentDimension'];
            }
        }
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DimensionValues'])) {
            if (!empty($map['DimensionValues'])) {
                $model->dimensionValues = $map['DimensionValues'];
            }
        }

        return $model;
    }
}
