<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo;
use AlibabaCloud\Tea\Model;

class jstack extends Model
{
    /**
     * @var threadTrackDo[]
     */
    public $threadTrackDo;
    protected $_name = [
        'threadTrackDo' => 'ThreadTrackDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threadTrackDo) {
            $res['ThreadTrackDo'] = [];
            if (null !== $this->threadTrackDo && \is_array($this->threadTrackDo)) {
                $n = 0;
                foreach ($this->threadTrackDo as $item) {
                    $res['ThreadTrackDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jstack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThreadTrackDo'])) {
            if (!empty($map['ThreadTrackDo'])) {
                $model->threadTrackDo = [];
                $n                    = 0;
                foreach ($map['ThreadTrackDo'] as $item) {
                    $model->threadTrackDo[$n++] = null !== $item ? threadTrackDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
