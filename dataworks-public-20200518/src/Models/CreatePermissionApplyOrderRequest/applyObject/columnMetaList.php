<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject;

use AlibabaCloud\Tea\Model;

class columnMetaList extends Model
{
    /**
     * @description The name of the field on which you want to request permissions. If you want to request permissions on an entire table, enter the names of all fields in the table.
     *
     * This parameter is required.
     * @example aColumnName
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
