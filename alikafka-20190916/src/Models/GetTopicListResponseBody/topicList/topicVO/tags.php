<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO\tags\tagVO;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var tagVO[]
     */
    public $tagVO;
    protected $_name = [
        'tagVO' => 'TagVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagVO) {
            $res['TagVO'] = [];
            if (null !== $this->tagVO && \is_array($this->tagVO)) {
                $n = 0;
                foreach ($this->tagVO as $item) {
                    $res['TagVO'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TagVO'])) {
            if (!empty($map['TagVO'])) {
                $model->tagVO = [];
                $n            = 0;
                foreach ($map['TagVO'] as $item) {
                    $model->tagVO[$n++] = null !== $item ? tagVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
