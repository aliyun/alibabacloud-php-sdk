<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListGroupMemberResponseBody extends Model
{
    /**
     * @description The information about the groups.
     *
     * @var Group[]
     */
    public $groupItems;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If next_marker is empty, no next page exists.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhM1
     *
     * @var string
     */
    public $nextMarker;

    /**
     * @description The information about the users.
     *
     * @var User[]
     */
    public $userItems;
    protected $_name = [
        'groupItems' => 'group_items',
        'nextMarker' => 'next_marker',
        'userItems'  => 'user_items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupItems) {
            $res['group_items'] = [];
            if (null !== $this->groupItems && \is_array($this->groupItems)) {
                $n = 0;
                foreach ($this->groupItems as $item) {
                    $res['group_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }
        if (null !== $this->userItems) {
            $res['user_items'] = [];
            if (null !== $this->userItems && \is_array($this->userItems)) {
                $n = 0;
                foreach ($this->userItems as $item) {
                    $res['user_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupMemberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group_items'])) {
            if (!empty($map['group_items'])) {
                $model->groupItems = [];
                $n                 = 0;
                foreach ($map['group_items'] as $item) {
                    $model->groupItems[$n++] = null !== $item ? Group::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }
        if (isset($map['user_items'])) {
            if (!empty($map['user_items'])) {
                $model->userItems = [];
                $n                = 0;
                foreach ($map['user_items'] as $item) {
                    $model->userItems[$n++] = null !== $item ? User::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
