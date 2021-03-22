<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList;

use AlibabaCloud\Tea\Model;

class offsetList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList\offsetList[]
     */
    public $offsetList;
    protected $_name = [
        'offsetList' => 'OffsetList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offsetList) {
            $res['OffsetList'] = [];
            if (null !== $this->offsetList && \is_array($this->offsetList)) {
                $n = 0;
                foreach ($this->offsetList as $item) {
                    $res['OffsetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OffsetList'])) {
            if (!empty($map['OffsetList'])) {
                $model->offsetList = [];
                $n                 = 0;
                foreach ($map['OffsetList'] as $item) {
                    $model->offsetList[$n++] = null !== $item ? \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\topicList\topicList\offsetList\offsetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
