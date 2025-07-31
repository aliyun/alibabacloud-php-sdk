<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult\userGroupList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @example 49
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'userGroupList' => 'UserGroupList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = [];
            if (null !== $this->userGroupList && \is_array($this->userGroupList)) {
                $n = 0;
                foreach ($this->userGroupList as $item) {
                    $res['UserGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n = 0;
                foreach ($map['UserGroupList'] as $item) {
                    $model->userGroupList[$n++] = null !== $item ? userGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
