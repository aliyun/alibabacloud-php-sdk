<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos\liveStreamUserNumInfo;
use AlibabaCloud\Tea\Model;

class liveStreamUserNumInfos extends Model
{
    /**
     * @var liveStreamUserNumInfo[]
     */
    public $liveStreamUserNumInfo;
    protected $_name = [
        'liveStreamUserNumInfo' => 'LiveStreamUserNumInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamUserNumInfo) {
            $res['LiveStreamUserNumInfo'] = [];
            if (null !== $this->liveStreamUserNumInfo && \is_array($this->liveStreamUserNumInfo)) {
                $n = 0;
                foreach ($this->liveStreamUserNumInfo as $item) {
                    $res['LiveStreamUserNumInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamUserNumInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamUserNumInfo'])) {
            if (!empty($map['LiveStreamUserNumInfo'])) {
                $model->liveStreamUserNumInfo = [];
                $n                            = 0;
                foreach ($map['LiveStreamUserNumInfo'] as $item) {
                    $model->liveStreamUserNumInfo[$n++] = null !== $item ? liveStreamUserNumInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
