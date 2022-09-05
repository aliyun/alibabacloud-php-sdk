<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponseBody\quotaDimension\dimensionValueDetail;
use AlibabaCloud\Tea\Model;

class quotaDimension extends Model
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
    protected $_name = [
        'dependentDimensions'  => 'DependentDimensions',
        'dimensionKey'         => 'DimensionKey',
        'dimensionValueDetail' => 'DimensionValueDetail',
        'dimensionValues'      => 'DimensionValues',
        'name'                 => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependentDimensions) {
            $res['DependentDimensions'] = $this->dependentDimensions;
        }
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dimensionValueDetail) {
            $res['DimensionValueDetail'] = [];
            if (null !== $this->dimensionValueDetail && \is_array($this->dimensionValueDetail)) {
                $n = 0;
                foreach ($this->dimensionValueDetail as $item) {
                    $res['DimensionValueDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dimensionValues) {
            $res['DimensionValues'] = $this->dimensionValues;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaDimension
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = $map['DependentDimensions'];
            }
        }
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DimensionValueDetail'])) {
            if (!empty($map['DimensionValueDetail'])) {
                $model->dimensionValueDetail = [];
                $n                           = 0;
                foreach ($map['DimensionValueDetail'] as $item) {
                    $model->dimensionValueDetail[$n++] = null !== $item ? dimensionValueDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DimensionValues'])) {
            if (!empty($map['DimensionValues'])) {
                $model->dimensionValues = $map['DimensionValues'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
