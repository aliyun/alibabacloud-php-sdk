<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponseBody\data\avatarList;

class data extends Model
{
    /**
     * @var avatarList[]
     */
    public $avatarList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'avatarList' => 'AvatarList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->avatarList)) {
            Model::validateArray($this->avatarList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarList) {
            if (\is_array($this->avatarList)) {
                $res['AvatarList'] = [];
                $n1                = 0;
                foreach ($this->avatarList as $item1) {
                    $res['AvatarList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvatarList'])) {
            if (!empty($map['AvatarList'])) {
                $model->avatarList = [];
                $n1                = 0;
                foreach ($map['AvatarList'] as $item1) {
                    $model->avatarList[$n1++] = avatarList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
