<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateListShrinkRequest extends Model
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
     * @var string
     */
    public $itemsShrink;

    /**
     * @example example
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'itemsShrink' => 'Items',
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
        if (null !== $this->itemsShrink) {
            $res['Items'] = $this->itemsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateListShrinkRequest
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
            $model->itemsShrink = $map['Items'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
