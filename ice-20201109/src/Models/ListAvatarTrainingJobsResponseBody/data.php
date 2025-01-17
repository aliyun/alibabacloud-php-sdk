<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponseBody\data\avatarTrainingJobList;

class data extends Model
{
    /**
     * @var avatarTrainingJobList[]
     */
    public $avatarTrainingJobList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'avatarTrainingJobList' => 'AvatarTrainingJobList',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->avatarTrainingJobList)) {
            Model::validateArray($this->avatarTrainingJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarTrainingJobList) {
            if (\is_array($this->avatarTrainingJobList)) {
                $res['AvatarTrainingJobList'] = [];
                $n1                           = 0;
                foreach ($this->avatarTrainingJobList as $item1) {
                    $res['AvatarTrainingJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarTrainingJobList'])) {
            if (!empty($map['AvatarTrainingJobList'])) {
                $model->avatarTrainingJobList = [];
                $n1                           = 0;
                foreach ($map['AvatarTrainingJobList'] as $item1) {
                    $model->avatarTrainingJobList[$n1++] = avatarTrainingJobList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
