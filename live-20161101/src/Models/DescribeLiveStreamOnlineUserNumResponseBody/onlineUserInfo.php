<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo;
use AlibabaCloud\Tea\Model;

class onlineUserInfo extends Model
{
    /**
     * @var liveStreamOnlineUserNumInfo[]
     */
    public $liveStreamOnlineUserNumInfo;
    protected $_name = [
        'liveStreamOnlineUserNumInfo' => 'LiveStreamOnlineUserNumInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamOnlineUserNumInfo) {
            $res['LiveStreamOnlineUserNumInfo'] = [];
            if (null !== $this->liveStreamOnlineUserNumInfo && \is_array($this->liveStreamOnlineUserNumInfo)) {
                $n = 0;
                foreach ($this->liveStreamOnlineUserNumInfo as $item) {
                    $res['LiveStreamOnlineUserNumInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineUserInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamOnlineUserNumInfo'])) {
            if (!empty($map['LiveStreamOnlineUserNumInfo'])) {
                $model->liveStreamOnlineUserNumInfo = [];
                $n                                  = 0;
                foreach ($map['LiveStreamOnlineUserNumInfo'] as $item) {
                    $model->liveStreamOnlineUserNumInfo[$n++] = null !== $item ? liveStreamOnlineUserNumInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
