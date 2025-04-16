<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList;

class pageResult extends Model
{
    /**
     * @var memberList[]
     */
    public $memberList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'memberList' => 'MemberList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n1 = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1++] = memberList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
