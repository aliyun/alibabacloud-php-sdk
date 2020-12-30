<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody;

use AlibabaCloud\Tea\Model;

class quotaDimensions extends Model
{
    /**
     * @var bool
     */
    public $requisite;

    /**
     * @var string
     */
    public $dimensionKey;

    /**
     * @var string[]
     */
    public $dependentDimensions;

    /**
     * @var string[]
     */
    public $dimensionValues;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'requisite'           => 'Requisite',
        'dimensionKey'        => 'DimensionKey',
        'dependentDimensions' => 'DependentDimensions',
        'dimensionValues'     => 'DimensionValues',
        'name'                => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requisite) {
            $res['Requisite'] = $this->requisite;
        }
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dependentDimensions) {
            $res['DependentDimensions'] = $this->dependentDimensions;
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
     * @return quotaDimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Requisite'])) {
            $model->requisite = $map['Requisite'];
        }
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DependentDimensions'])) {
            if (!empty($map['DependentDimensions'])) {
                $model->dependentDimensions = $map['DependentDimensions'];
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
