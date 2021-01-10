<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $name;

    /**
     * @var meta[]
     */
    public $meta;
    protected $_name = [
        'active' => 'active',
        'name'   => 'name',
        'meta'   => 'meta',
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
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
