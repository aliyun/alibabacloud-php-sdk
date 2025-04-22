<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListGroupMemberResponseBody extends Model
{
    /**
     * @var Group[]
     */
    public $groupItems;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var User[]
     */
    public $userItems;
    protected $_name = [
        'groupItems' => 'group_items',
        'nextMarker' => 'next_marker',
        'userItems' => 'user_items',
    ];

    public function validate()
    {
        if (\is_array($this->groupItems)) {
            Model::validateArray($this->groupItems);
        }
        if (\is_array($this->userItems)) {
            Model::validateArray($this->userItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupItems) {
            if (\is_array($this->groupItems)) {
                $res['group_items'] = [];
                $n1 = 0;
                foreach ($this->groupItems as $item1) {
                    $res['group_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }

        if (null !== $this->userItems) {
            if (\is_array($this->userItems)) {
                $res['user_items'] = [];
                $n1 = 0;
                foreach ($this->userItems as $item1) {
                    $res['user_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['group_items'])) {
            if (!empty($map['group_items'])) {
                $model->groupItems = [];
                $n1 = 0;
                foreach ($map['group_items'] as $item1) {
                    $model->groupItems[$n1++] = Group::fromMap($item1);
                }
            }
        }

        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }

        if (isset($map['user_items'])) {
            if (!empty($map['user_items'])) {
                $model->userItems = [];
                $n1 = 0;
                foreach ($map['user_items'] as $item1) {
                    $model->userItems[$n1++] = User::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
