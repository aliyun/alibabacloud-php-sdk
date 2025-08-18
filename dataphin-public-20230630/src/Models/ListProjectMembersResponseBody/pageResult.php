<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersResponseBody\pageResult\projectMemberList;

class pageResult extends Model
{
    /**
     * @var projectMemberList[]
     */
    public $projectMemberList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectMemberList' => 'ProjectMemberList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->projectMemberList)) {
            Model::validateArray($this->projectMemberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectMemberList) {
            if (\is_array($this->projectMemberList)) {
                $res['ProjectMemberList'] = [];
                $n1 = 0;
                foreach ($this->projectMemberList as $item1) {
                    $res['ProjectMemberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ProjectMemberList'])) {
            if (!empty($map['ProjectMemberList'])) {
                $model->projectMemberList = [];
                $n1 = 0;
                foreach ($map['ProjectMemberList'] as $item1) {
                    $model->projectMemberList[$n1] = projectMemberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
