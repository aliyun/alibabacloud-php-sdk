<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList\offsetList;

class offsetList extends Model
{
    /**
     * @var offsetList[]
     */
    public $offsetList;
    protected $_name = [
        'offsetList' => 'OffsetList',
    ];

    public function validate()
    {
        if (\is_array($this->offsetList)) {
            Model::validateArray($this->offsetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offsetList) {
            if (\is_array($this->offsetList)) {
                $res['OffsetList'] = [];
                $n1 = 0;
                foreach ($this->offsetList as $item1) {
                    $res['OffsetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OffsetList'])) {
            if (!empty($map['OffsetList'])) {
                $model->offsetList = [];
                $n1 = 0;
                foreach ($map['OffsetList'] as $item1) {
                    $model->offsetList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
