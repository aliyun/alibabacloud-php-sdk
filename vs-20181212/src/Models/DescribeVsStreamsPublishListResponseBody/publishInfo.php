<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponseBody\publishInfo\liveStreamPublishInfo;
use AlibabaCloud\Tea\Model;

class publishInfo extends Model
{
    /**
     * @var liveStreamPublishInfo[]
     */
    public $liveStreamPublishInfo;
    protected $_name = [
        'liveStreamPublishInfo' => 'LiveStreamPublishInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamPublishInfo) {
            $res['LiveStreamPublishInfo'] = [];
            if (null !== $this->liveStreamPublishInfo && \is_array($this->liveStreamPublishInfo)) {
                $n = 0;
                foreach ($this->liveStreamPublishInfo as $item) {
                    $res['LiveStreamPublishInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamPublishInfo'])) {
            if (!empty($map['LiveStreamPublishInfo'])) {
                $model->liveStreamPublishInfo = [];
                $n                            = 0;
                foreach ($map['LiveStreamPublishInfo'] as $item) {
                    $model->liveStreamPublishInfo[$n++] = null !== $item ? liveStreamPublishInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
