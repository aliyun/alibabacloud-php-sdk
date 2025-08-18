<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsResponseBody\pageResult\userGroupList;

class pageResult extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->userGroupList)) {
            Model::validateArray($this->userGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userGroupList) {
            if (\is_array($this->userGroupList)) {
                $res['UserGroupList'] = [];
                $n1 = 0;
                foreach ($this->userGroupList as $item1) {
                    $res['UserGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n1 = 0;
                foreach ($map['UserGroupList'] as $item1) {
                    $model->userGroupList[$n1] = userGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
