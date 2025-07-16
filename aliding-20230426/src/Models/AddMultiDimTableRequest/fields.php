<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddMultiDimTableRequest;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $property;

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'property' => 'Property',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
