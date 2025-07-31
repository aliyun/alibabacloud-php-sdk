<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersResponseBody\pageResult\projectMemberList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var projectMemberList[]
     */
    public $projectMemberList;

    /**
     * @example 101
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'projectMemberList' => 'ProjectMemberList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectMemberList) {
            $res['ProjectMemberList'] = [];
            if (null !== $this->projectMemberList && \is_array($this->projectMemberList)) {
                $n = 0;
                foreach ($this->projectMemberList as $item) {
                    $res['ProjectMemberList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectMemberList'])) {
            if (!empty($map['ProjectMemberList'])) {
                $model->projectMemberList = [];
                $n = 0;
                foreach ($map['ProjectMemberList'] as $item) {
                    $model->projectMemberList[$n++] = null !== $item ? projectMemberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
