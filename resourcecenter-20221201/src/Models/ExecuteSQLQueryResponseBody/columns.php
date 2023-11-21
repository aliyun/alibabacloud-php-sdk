<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteSQLQueryResponseBody;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The name of the column.
     *
     * @example resource_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the column.
     *
     * @example varchar
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
