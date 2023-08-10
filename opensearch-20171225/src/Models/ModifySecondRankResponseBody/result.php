<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the expression is the default one.
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @example 1
     *
     * @var int
     */
    public $created;

    /**
     * @description The description of the expression.
     *
     * @example "11"
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the expression. This parameter appears only in the response.
     *
     * @example 890473
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether the expression is the default one. This parameter appears only in the response. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description Indicates whether the expression is a system expression. This parameter appears only in the response. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $isSys;

    /**
     * @description The content of the fine sort expression.
     *
     * You can define an expression that consists of fields, feature functions, and mathematical functions to implement complex sort logic.
     * @example cate_id > 0 and cate_id < 1000
     *
     * @var string
     */
    public $meta;

    /**
     * @description The name of the expression.
     *
     * @example lsh_second_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'active'      => 'active',
        'created'     => 'created',
        'description' => 'description',
        'id'          => 'id',
        'isDefault'   => 'isDefault',
        'isSys'       => 'isSys',
        'meta'        => 'meta',
        'name'        => 'name',
        'updated'     => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->isSys) {
            $res['isSys'] = $this->isSys;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['isSys'])) {
            $model->isSys = $map['isSys'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
