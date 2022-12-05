<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody\notifyRecordsInfo\liveStreamNotifyRecordsInfo;
use AlibabaCloud\Tea\Model;

class notifyRecordsInfo extends Model
{
    /**
     * @var liveStreamNotifyRecordsInfo[]
     */
    public $liveStreamNotifyRecordsInfo;
    protected $_name = [
        'liveStreamNotifyRecordsInfo' => 'LiveStreamNotifyRecordsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamNotifyRecordsInfo) {
            $res['LiveStreamNotifyRecordsInfo'] = [];
            if (null !== $this->liveStreamNotifyRecordsInfo && \is_array($this->liveStreamNotifyRecordsInfo)) {
                $n = 0;
                foreach ($this->liveStreamNotifyRecordsInfo as $item) {
                    $res['LiveStreamNotifyRecordsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyRecordsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamNotifyRecordsInfo'])) {
            if (!empty($map['LiveStreamNotifyRecordsInfo'])) {
                $model->liveStreamNotifyRecordsInfo = [];
                $n                                  = 0;
                foreach ($map['LiveStreamNotifyRecordsInfo'] as $item) {
                    $model->liveStreamNotifyRecordsInfo[$n++] = null !== $item ? liveStreamNotifyRecordsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
