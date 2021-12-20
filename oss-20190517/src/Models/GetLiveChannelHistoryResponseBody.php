<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetLiveChannelHistoryResponseBody extends Model
{
    /**
     * @var LiveRecord[]
     */
    public $liveRecords;
    protected $_name = [
        'liveRecords' => 'LiveRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecords) {
            $res['LiveRecord'] = [];
            if (null !== $this->liveRecords && \is_array($this->liveRecords)) {
                $n = 0;
                foreach ($this->liveRecords as $item) {
                    $res['LiveRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveChannelHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecord'])) {
            if (!empty($map['LiveRecord'])) {
                $model->liveRecords = [];
                $n                  = 0;
                foreach ($map['LiveRecord'] as $item) {
                    $model->liveRecords[$n++] = null !== $item ? LiveRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
