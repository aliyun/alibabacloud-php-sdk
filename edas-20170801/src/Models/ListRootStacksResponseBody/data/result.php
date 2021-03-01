<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksResponseBody\data\result\children;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRootStacksResponseBody\data\result\root;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var children[]
     */
    public $children;

    /**
     * @var root
     */
    public $root;
    protected $_name = [
        'children' => 'Children',
        'root'     => 'Root',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->root) {
            $res['Root'] = null !== $this->root ? $this->root->toMap() : null;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Root'])) {
            $model->root = root::fromMap($map['Root']);
        }

        return $model;
    }
}
