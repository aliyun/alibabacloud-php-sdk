<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsControlHistoryResponse\controlInfo\liveStreamControlInfo;
use AlibabaCloud\Tea\Model;

class controlInfo extends Model
{
    /**
     * @var liveStreamControlInfo[]
     */
    public $liveStreamControlInfo;
    protected $_name = [
        'liveStreamControlInfo' => 'LiveStreamControlInfo',
    ];

    public function validate()
    {
        Model::validateRequired('liveStreamControlInfo', $this->liveStreamControlInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamControlInfo) {
            $res['LiveStreamControlInfo'] = [];
            if (null !== $this->liveStreamControlInfo && \is_array($this->liveStreamControlInfo)) {
                $n = 0;
                foreach ($this->liveStreamControlInfo as $item) {
                    $res['LiveStreamControlInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamControlInfo'])) {
            if (!empty($map['LiveStreamControlInfo'])) {
                $model->liveStreamControlInfo = [];
                $n                            = 0;
                foreach ($map['LiveStreamControlInfo'] as $item) {
                    $model->liveStreamControlInfo[$n++] = null !== $item ? liveStreamControlInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
