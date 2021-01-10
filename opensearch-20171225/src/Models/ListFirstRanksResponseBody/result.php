<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponseBody\result\meta;
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
     * @var meta[]
     */
    public $meta;
    protected $_name = [
        'created'     => 'created',
        'active'      => 'active',
        'description' => 'description',
        'updated'     => 'updated',
        'name'        => 'name',
        'meta'        => 'meta',
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
            $res['meta'] = [];
            if (null !== $this->meta && \is_array($this->meta)) {
                $n = 0;
                foreach ($this->meta as $item) {
                    $res['meta'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['meta'])) {
                $model->meta = [];
                $n           = 0;
                foreach ($map['meta'] as $item) {
                    $model->meta[$n++] = null !== $item ? meta::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
