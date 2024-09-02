<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody\result\meta;
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
     * @description The time when the cluster was created.
     *
     * @example 0
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
     * @description The content of the expression.
     *
     * @example []
     *
     * @var meta[]
     */
    public $meta;

    /**
     * @description The name of the expression.
     *
     * @example default
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 0
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'active'      => 'active',
        'created'     => 'created',
        'description' => 'description',
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
        if (null !== $this->meta) {
            $res['meta'] = [];
            if (null !== $this->meta && \is_array($this->meta)) {
                $n = 0;
                foreach ($this->meta as $item) {
                    $res['meta'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                $n           = 0;
                foreach ($map['meta'] as $item) {
                    $model->meta[$n++] = null !== $item ? meta::fromMap($item) : $item;
                }
            }
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
