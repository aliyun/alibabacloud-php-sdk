<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody\data;

use AlibabaCloud\Dara\Model;

class paramConfig extends Model
{
    /**
     * @var string
     */
    public $checkField;

    /**
     * @var string
     */
    public $field;

    /**
     * @var bool
     */
    public $necessary;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'checkField' => 'CheckField',
        'field' => 'Field',
        'necessary' => 'Necessary',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkField) {
            $res['CheckField'] = $this->checkField;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->necessary) {
            $res['Necessary'] = $this->necessary;
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
        if (isset($map['CheckField'])) {
            $model->checkField = $map['CheckField'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['Necessary'])) {
            $model->necessary = $map['Necessary'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
