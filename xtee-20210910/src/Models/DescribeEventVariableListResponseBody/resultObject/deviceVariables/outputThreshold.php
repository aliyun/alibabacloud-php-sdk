<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\deviceVariables;

use AlibabaCloud\Dara\Model;

class outputThreshold extends Model
{
    /**
     * @var float
     */
    public $maxValue;

    /**
     * @var float
     */
    public $minValue;
    protected $_name = [
        'maxValue' => 'maxValue',
        'minValue' => 'minValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['maxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['minValue'] = $this->minValue;
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
        if (isset($map['maxValue'])) {
            $model->maxValue = $map['maxValue'];
        }

        if (isset($map['minValue'])) {
            $model->minValue = $map['minValue'];
        }

        return $model;
    }
}
