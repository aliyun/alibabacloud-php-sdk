<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\detailInTopicList\detailInTopicDo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInTopicDo) {
            $res['DetailInTopicDo'] = [];
            if (null !== $this->detailInTopicDo && \is_array($this->detailInTopicDo)) {
                $n = 0;
                foreach ($this->detailInTopicDo as $item) {
                    $res['DetailInTopicDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInTopicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInTopicDo'])) {
            if (!empty($map['DetailInTopicDo'])) {
                $model->detailInTopicDo = [];
                $n                      = 0;
                foreach ($map['DetailInTopicDo'] as $item) {
                    $model->detailInTopicDo[$n++] = null !== $item ? detailInTopicDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
