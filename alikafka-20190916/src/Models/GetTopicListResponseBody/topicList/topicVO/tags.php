<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetTopicListResponseBody\topicList\topicVO\tags\tagVO;

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
        if (\is_array($this->tagVO)) {
            Model::validateArray($this->tagVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagVO) {
            if (\is_array($this->tagVO)) {
                $res['TagVO'] = [];
                $n1 = 0;
                foreach ($this->tagVO as $item1) {
                    $res['TagVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TagVO'])) {
            if (!empty($map['TagVO'])) {
                $model->tagVO = [];
                $n1 = 0;
                foreach ($map['TagVO'] as $item1) {
                    $model->tagVO[$n1] = tagVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
