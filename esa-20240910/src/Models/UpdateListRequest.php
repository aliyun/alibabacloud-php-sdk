<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateListRequest extends Model
{
    /**
     * @example a custom list
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 40000001
     *
     * @var int
     */
    public $id;

    /**
     * @example a custom list
     *
     * @var string[]
     */
    public $items;

    /**
     * @example example
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'items'       => 'Items',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = $map['Items'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
