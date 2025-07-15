<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster\tags\tag;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'tag' => 'tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
