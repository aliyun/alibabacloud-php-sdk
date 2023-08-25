<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponseBody\data\avatarTrainingJobList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var avatarTrainingJobList[]
     */
    public $avatarTrainingJobList;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'avatarTrainingJobList' => 'AvatarTrainingJobList',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarTrainingJobList) {
            $res['AvatarTrainingJobList'] = [];
            if (null !== $this->avatarTrainingJobList && \is_array($this->avatarTrainingJobList)) {
                $n = 0;
                foreach ($this->avatarTrainingJobList as $item) {
                    $res['AvatarTrainingJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AvatarTrainingJobList'])) {
            if (!empty($map['AvatarTrainingJobList'])) {
                $model->avatarTrainingJobList = [];
                $n                            = 0;
                foreach ($map['AvatarTrainingJobList'] as $item) {
                    $model->avatarTrainingJobList[$n++] = null !== $item ? avatarTrainingJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
