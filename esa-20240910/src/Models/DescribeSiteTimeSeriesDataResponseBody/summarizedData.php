<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataResponseBody;

use AlibabaCloud\Dara\Model;

class summarizedData extends Model
{
    /**
     * @var string
     */
    public $aggMethod;

    /**
     * @var string
     */
    public $dimensionName;

    /**
     * @var string
     */
    public $dimensionValue;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'aggMethod' => 'AggMethod',
        'dimensionName' => 'DimensionName',
        'dimensionValue' => 'DimensionValue',
        'fieldName' => 'FieldName',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggMethod) {
            $res['AggMethod'] = $this->aggMethod;
        }

        if (null !== $this->dimensionName) {
            $res['DimensionName'] = $this->dimensionName;
        }

        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['AggMethod'])) {
            $model->aggMethod = $map['AggMethod'];
        }

        if (isset($map['DimensionName'])) {
            $model->dimensionName = $map['DimensionName'];
        }

        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
