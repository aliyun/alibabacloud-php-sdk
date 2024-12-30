<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody\data\children;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody\data\parent;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var children
     */
    public $children;

    /**
     * @var parent
     */
    public $parent;
    protected $_name = [
        'children' => 'Children',
        'parent'   => 'Parent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = null !== $this->children ? $this->children->toMap() : null;
        }
        if (null !== $this->parent) {
            $res['Parent'] = null !== $this->parent ? $this->parent->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            $model->children = children::fromMap($map['Children']);
        }
        if (isset($map['Parent'])) {
            $model->parent = parent::fromMap($map['Parent']);
        }

        return $model;
    }
}
