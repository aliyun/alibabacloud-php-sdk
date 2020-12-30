<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListMixResponseBody\result\parameter;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'value' => 'Value',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
