<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponseBody\data\avatarList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var avatarList[]
     */
    public $avatarList;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'avatarList' => 'AvatarList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarList) {
            $res['AvatarList'] = [];
            if (null !== $this->avatarList && \is_array($this->avatarList)) {
                $n = 0;
                foreach ($this->avatarList as $item) {
                    $res['AvatarList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarList'])) {
            if (!empty($map['AvatarList'])) {
                $model->avatarList = [];
                $n                 = 0;
                foreach ($map['AvatarList'] as $item) {
                    $model->avatarList[$n++] = null !== $item ? avatarList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
