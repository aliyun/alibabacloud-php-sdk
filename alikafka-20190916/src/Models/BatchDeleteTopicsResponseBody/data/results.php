<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\BatchDeleteTopicsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\BatchDeleteTopicsResponseBody\data\results\topicDeleteResultItemVO;

class results extends Model
{
    /**
     * @var topicDeleteResultItemVO[]
     */
    public $topicDeleteResultItemVO;
    protected $_name = [
        'topicDeleteResultItemVO' => 'TopicDeleteResultItemVO',
    ];

    public function validate()
    {
        if (\is_array($this->topicDeleteResultItemVO)) {
            Model::validateArray($this->topicDeleteResultItemVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topicDeleteResultItemVO) {
            if (\is_array($this->topicDeleteResultItemVO)) {
                $res['TopicDeleteResultItemVO'] = [];
                $n1 = 0;
                foreach ($this->topicDeleteResultItemVO as $item1) {
                    $res['TopicDeleteResultItemVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopicDeleteResultItemVO'])) {
            if (!empty($map['TopicDeleteResultItemVO'])) {
                $model->topicDeleteResultItemVO = [];
                $n1 = 0;
                foreach ($map['TopicDeleteResultItemVO'] as $item1) {
                    $model->topicDeleteResultItemVO[$n1] = topicDeleteResultItemVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
