<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckCustomConfigRequest;

use AlibabaCloud\Tea\Model;

class customConfigs extends Model
{
    /**
     * @description The name of the custom configuration item. The name of a custom configuration item is unique in a check item.
     *
     * @example SessionTimeMax
     *
     * @var string
     */
    public $name;

    /**
     * @description The operation that you want to perform on the custom configuration item. This parameter is required only if you want to delete the custom configuration item. To delete the custom configuration item, set the value to DELETE.
     *
     * @example DELETE
     *
     * @var string
     */
    public $operation;

    /**
     * @description The value of the custom configuration item. The value is a string.
     *
     * @example 13
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'      => 'Name',
        'operation' => 'Operation',
        'value'     => 'Value',
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
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
