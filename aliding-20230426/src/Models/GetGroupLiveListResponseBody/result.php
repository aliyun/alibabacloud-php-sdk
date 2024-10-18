<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListResponseBody\result\groupLiveList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 直播列表
     *
     * @var groupLiveList[]
     */
    public $groupLiveList;
    protected $_name = [
        'groupLiveList' => 'GroupLiveList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupLiveList) {
            $res['GroupLiveList'] = [];
            if (null !== $this->groupLiveList && \is_array($this->groupLiveList)) {
                $n = 0;
                foreach ($this->groupLiveList as $item) {
                    $res['GroupLiveList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupLiveList'])) {
            if (!empty($map['GroupLiveList'])) {
                $model->groupLiveList = [];
                $n                    = 0;
                foreach ($map['GroupLiveList'] as $item) {
                    $model->groupLiveList[$n++] = null !== $item ? groupLiveList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
