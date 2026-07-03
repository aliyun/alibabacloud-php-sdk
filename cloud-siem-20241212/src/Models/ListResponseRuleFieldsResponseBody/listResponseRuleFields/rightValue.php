<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody\listResponseRuleFields;

use AlibabaCloud\Dara\Model;

class rightValue extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueName;
    protected $_name = [
        'value' => 'Value',
        'valueName' => 'ValueName',
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

        if (null !== $this->valueName) {
            $res['ValueName'] = $this->valueName;
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

        if (isset($map['ValueName'])) {
            $model->valueName = $map['ValueName'];
        }

        return $model;
    }
}
