<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\Summary\meta;
use AlibabaCloud\Tea\Model;

class Summary extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'active' => 'active',
        'meta'   => 'meta',
        'name'   => 'name',
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
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
