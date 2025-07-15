<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsTotalCountResponseBody\streamCountList\streamCountInfos;
use AlibabaCloud\Tea\Model;

class streamCountList extends Model
{
    /**
     * @var streamCountInfos[]
     */
    public $streamCountInfos;
    protected $_name = [
        'streamCountInfos' => 'StreamCountInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamCountInfos) {
            $res['StreamCountInfos'] = [];
            if (null !== $this->streamCountInfos && \is_array($this->streamCountInfos)) {
                $n = 0;
                foreach ($this->streamCountInfos as $item) {
                    $res['StreamCountInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamCountInfos'])) {
            if (!empty($map['StreamCountInfos'])) {
                $model->streamCountInfos = [];
                $n = 0;
                foreach ($map['StreamCountInfos'] as $item) {
                    $model->streamCountInfos[$n++] = null !== $item ? streamCountInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
