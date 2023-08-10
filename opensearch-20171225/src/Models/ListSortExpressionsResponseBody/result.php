<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortExpressionsResponseBody;

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
     * @description The time when the expression was created.
     *
     * @example 1655793690
     *
     * @var int
     */
    public $created;

    /**
     * @description The description of the expression.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the expression.
     *
     * @example default
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the expression was last updated.
     *
     * @example 1655793690
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'active'      => 'active',
        'created'     => 'created',
        'description' => 'description',
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
