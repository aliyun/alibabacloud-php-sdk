<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateListShrinkRequest extends Model
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
     * @var string
     */
    public $itemsShrink;

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
        'itemsShrink' => 'Items',
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
        if (null !== $this->itemsShrink) {
            $res['Items'] = $this->itemsShrink;
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
     * @return CreateListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Items'])) {
            $model->itemsShrink = $map['Items'];
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
