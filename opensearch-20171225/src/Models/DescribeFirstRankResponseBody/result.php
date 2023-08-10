<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the expression is the default one.
     *
     * @example false
     *
     * @var bool
     */
    public $active;

    /**
     * @description The description of the expression.
     *
     * @example -
     *
     * @var string
     */
    public $description;

    /**
     * @description The content of the expression.
     *
     * @var meta[]
     */
    public $meta;

    /**
     * @description The name of the expression.
     *
     * @example ar_wear_edit_time
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'active'      => 'active',
        'description' => 'description',
        'meta'        => 'meta',
        'name'        => 'name',
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

        return $model;
    }
}
