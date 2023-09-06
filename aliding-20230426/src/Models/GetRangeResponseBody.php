<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetRangeResponseBody extends Model
{
    /**
     * @example []
     *
     * @var undefined[][]
     */
    public $backgroundColors;

    /**
     * @example []
     *
     * @var string[][]
     */
    public $displayValues;

    /**
     * @example []
     *
     * @var string[][]
     */
    public $formulas;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example []
     *
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'backgroundColors' => 'backgroundColors',
        'displayValues'    => 'displayValues',
        'formulas'         => 'formulas',
        'requestId'        => 'requestId',
        'values'           => 'values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundColors) {
            $res['backgroundColors'] = $this->backgroundColors;
        }
        if (null !== $this->displayValues) {
            $res['displayValues'] = $this->displayValues;
        }
        if (null !== $this->formulas) {
            $res['formulas'] = $this->formulas;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->values) {
            $res['values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRangeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backgroundColors'])) {
            if (!empty($map['backgroundColors'])) {
                $model->backgroundColors = $map['backgroundColors'];
            }
        }
        if (isset($map['displayValues'])) {
            if (!empty($map['displayValues'])) {
                $model->displayValues = $map['displayValues'];
            }
        }
        if (isset($map['formulas'])) {
            if (!empty($map['formulas'])) {
                $model->formulas = $map['formulas'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}
