<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateListRequest extends Model
{
    /**
     * @description The description of the list that you want to create.
     *
     * @example a custom list
     *
     * @var string
     */
    public $description;

    /**
     * @description The items in the list that you want to create.
     *
     * @example a custom list
     *
     * @var string[]
     */
    public $items;

    /**
     * @description The type of the list that you want to create.
     *
     * @example ip
     *
     * @var string
     */
    public $kind;

    /**
     * @description The name of the list that you want to create.
     *
     * This parameter is required.
     *
     * @example example
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'items' => 'Items',
        'kind' => 'Kind',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = $map['Items'];
            }
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
