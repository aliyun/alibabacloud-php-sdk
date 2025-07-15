<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMergeResponseBody\liveStreamMergeList\liveStreamMerge;
use AlibabaCloud\Tea\Model;

class liveStreamMergeList extends Model
{
    /**
     * @var liveStreamMerge[]
     */
    public $liveStreamMerge;
    protected $_name = [
        'liveStreamMerge' => 'LiveStreamMerge',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveStreamMerge) {
            $res['LiveStreamMerge'] = [];
            if (null !== $this->liveStreamMerge && \is_array($this->liveStreamMerge)) {
                $n = 0;
                foreach ($this->liveStreamMerge as $item) {
                    $res['LiveStreamMerge'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamMergeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamMerge'])) {
            if (!empty($map['LiveStreamMerge'])) {
                $model->liveStreamMerge = [];
                $n = 0;
                foreach ($map['LiveStreamMerge'] as $item) {
                    $model->liveStreamMerge[$n++] = null !== $item ? liveStreamMerge::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
