<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\detailInTopicList\detailInTopicDo;

class detailInTopicList extends Model
{
    /**
     * @var detailInTopicDo[]
     */
    public $detailInTopicDo;
    protected $_name = [
        'detailInTopicDo' => 'DetailInTopicDo',
    ];

    public function validate()
    {
        if (\is_array($this->detailInTopicDo)) {
            Model::validateArray($this->detailInTopicDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailInTopicDo) {
            if (\is_array($this->detailInTopicDo)) {
                $res['DetailInTopicDo'] = [];
                $n1 = 0;
                foreach ($this->detailInTopicDo as $item1) {
                    $res['DetailInTopicDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DetailInTopicDo'])) {
            if (!empty($map['DetailInTopicDo'])) {
                $model->detailInTopicDo = [];
                $n1 = 0;
                foreach ($map['DetailInTopicDo'] as $item1) {
                    $model->detailInTopicDo[$n1] = detailInTopicDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
