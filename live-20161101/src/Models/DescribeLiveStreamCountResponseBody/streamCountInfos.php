<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo;
use AlibabaCloud\Tea\Model;

class streamCountInfos extends Model
{
    /**
     * @var streamCountInfo[]
     */
    public $streamCountInfo;
    protected $_name = [
        'streamCountInfo' => 'StreamCountInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamCountInfo) {
            $res['StreamCountInfo'] = [];
            if (null !== $this->streamCountInfo && \is_array($this->streamCountInfo)) {
                $n = 0;
                foreach ($this->streamCountInfo as $item) {
                    $res['StreamCountInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamCountInfo'])) {
            if (!empty($map['StreamCountInfo'])) {
                $model->streamCountInfo = [];
                $n                      = 0;
                foreach ($map['StreamCountInfo'] as $item) {
                    $model->streamCountInfo[$n++] = null !== $item ? streamCountInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
