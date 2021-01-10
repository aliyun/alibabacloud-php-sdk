<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsOnlineListResponseBody\onlineInfo\liveStreamOnlineInfo;
use AlibabaCloud\Tea\Model;

class onlineInfo extends Model
{
    /**
     * @var liveStreamOnlineInfo[]
     */
    public $liveStreamOnlineInfo;
    protected $_name = [
        'liveStreamOnlineInfo' => 'LiveStreamOnlineInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamOnlineInfo) {
            $res['LiveStreamOnlineInfo'] = [];
            if (null !== $this->liveStreamOnlineInfo && \is_array($this->liveStreamOnlineInfo)) {
                $n = 0;
                foreach ($this->liveStreamOnlineInfo as $item) {
                    $res['LiveStreamOnlineInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamOnlineInfo'])) {
            if (!empty($map['LiveStreamOnlineInfo'])) {
                $model->liveStreamOnlineInfo = [];
                $n                           = 0;
                foreach ($map['LiveStreamOnlineInfo'] as $item) {
                    $model->liveStreamOnlineInfo[$n++] = null !== $item ? liveStreamOnlineInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
