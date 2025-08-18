<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody\data\children;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDirectoryTreeResponseBody\data\parent;

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
        'parent' => 'Parent',
    ];

    public function validate()
    {
        if (null !== $this->children) {
            $this->children->validate();
        }
        if (null !== $this->parent) {
            $this->parent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = null !== $this->children ? $this->children->toArray($noStream) : $this->children;
        }

        if (null !== $this->parent) {
            $res['Parent'] = null !== $this->parent ? $this->parent->toArray($noStream) : $this->parent;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
