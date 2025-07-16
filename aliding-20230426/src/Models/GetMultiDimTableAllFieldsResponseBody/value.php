<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsResponseBody;

use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @example stxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example Sheet1
     *
     * @var string
     */
    public $name;

    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $property;

    /**
     * @example xxx
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'property' => 'Property',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
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
     * @return value
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
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
