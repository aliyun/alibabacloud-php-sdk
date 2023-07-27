<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule\filter;

use AlibabaCloud\SDK\Oss\V20190517\Models\Tag;
use AlibabaCloud\Tea\Model;

class not extends Model
{
    /**
     * @var string
     */
    public $prefix;

    /**
     * @var Tag
     */
    public $tag;
    protected $_name = [
        'prefix' => 'Prefix',
        'tag'    => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return not
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Tag'])) {
            $model->tag = Tag::fromMap($map['Tag']);
        }

        return $model;
    }
}
