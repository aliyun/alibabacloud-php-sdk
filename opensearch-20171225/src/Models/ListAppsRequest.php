<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListAppsRequest extends Model
{
    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $group;

    /**
     * @description 0
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description 0
     *
     * @example 5
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'group' => 'group',
        'page'  => 'page',
        'size'  => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
