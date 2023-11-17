<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody\data;

use AlibabaCloud\Tea\Model;

class paramConfig extends Model
{
    /**
     * @example [0-9]{4}\.[0-9]{4}\.[0-9]{4}\.[0-9]{4}
     *
     * @var string
     */
    public $checkField;

    /**
     * @example ip
     *
     * @var string
     */
    public $field;

    /**
     * @example true
     *
     * @var bool
     */
    public $necessary;

    /**
     * @example 12.xx.xx.xx
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'checkField' => 'CheckField',
        'field'      => 'Field',
        'necessary'  => 'Necessary',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return paramConfig
     */
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
