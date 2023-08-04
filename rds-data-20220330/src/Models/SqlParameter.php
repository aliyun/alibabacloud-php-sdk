<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class SqlParameter extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $typeHint;

    /**
     * @var Field
     */
    public $value;
    protected $_name = [
        'name'     => 'Name',
        'typeHint' => 'TypeHint',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->typeHint) {
            $res['TypeHint'] = $this->typeHint;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SqlParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TypeHint'])) {
            $model->typeHint = $map['TypeHint'];
        }
        if (isset($map['Value'])) {
            $model->value = Field::fromMap($map['Value']);
        }

        return $model;
    }
}
