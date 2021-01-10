<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $isSys;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $meta;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'created'     => 'created',
        'active'      => 'active',
        'isDefault'   => 'isDefault',
        'isSys'       => 'isSys',
        'description' => 'description',
        'updated'     => 'updated',
        'name'        => 'name',
        'meta'        => 'meta',
        'id'          => 'id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->isSys) {
            $res['isSys'] = $this->isSys;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['isSys'])) {
            $model->isSys = $map['isSys'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
