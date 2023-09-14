<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody\quotaDimensions\dimensionValueDetail;
use AlibabaCloud\Tea\Model;

class quotaDimensions extends Model
{
    /**
     * @var string[]
     */
    public $dependentDimensions;

    /**
     * @description The key of the quota dimension. Valid values:
     *
     *   regionId: the region ID.
     *   zoneId: the zone ID.
     *   chargeType: the billing method.
     *   networkType: the network type.
     *
     * @example zoneId
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The details of the quota dimension value.
     *
     * @var dimensionValueDetail[]
     */
    public $dimensionValueDetail;

    /**
     * @var string[]
     */
    public $dimensionValues;

    /**
     * @description The name of the quota dimension.
     *
     * @example Zone
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the quota dimension is required when you query quota dimensions. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $requisite;
    protected $_name = [
        'dependentDimensions'  => 'DependentDimensions',
        'dimensionKey'         => 'DimensionKey',
        'dimensionValueDetail' => 'DimensionValueDetail',
        'dimensionValues'      => 'DimensionValues',
        'name'                 => 'Name',
        'requisite'            => 'Requisite',
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
        if (null !== $this->requisite) {
            $res['Requisite'] = $this->requisite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaDimensions
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
        if (isset($map['Requisite'])) {
            $model->requisite = $map['Requisite'];
        }

        return $model;
    }
}
