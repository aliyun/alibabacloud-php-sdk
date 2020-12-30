<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTagByParamResponseBody\data\tag;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'tag' => 'tag',
    ];

    public function validate()
    {
    }

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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
