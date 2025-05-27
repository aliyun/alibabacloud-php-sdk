<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data;

use AlibabaCloud\Dara\Model;

class rightValueEnums extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueMds;
    protected $_name = [
        'value' => 'Value',
        'valueMds' => 'ValueMds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueMds) {
            $res['ValueMds'] = $this->valueMds;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueMds'])) {
            $model->valueMds = $map['ValueMds'];
        }

        return $model;
    }
}
