<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties;

use AlibabaCloud\Tea\Model;

class tableLifecycle extends Model
{
    /**
     * @description The lifecycle type. Valid values:
     * - *mandatory*: The lifecycle clause is required in a table creation statement.
     * - *optional*: The lifecycle clause is optional in a table creation statement. If you do not configure a lifecycle for a table, the table does not expire.
     * - *inherit*: If you do not configure a lifecycle for a table when you create the table, the value of the odps.table.lifecycle.value parameter is used as the table lifecycle by default.
     *
     * @example optional
     *
     * @var string
     */
    public $type;

    /**
     * @description The table lifecycle. Unit: days. Valid values: 1 to 37231. Default value: 37231.
     *
     * @example 37231
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableLifecycle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
