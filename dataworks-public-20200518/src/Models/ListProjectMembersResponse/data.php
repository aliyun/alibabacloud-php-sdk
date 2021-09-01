<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse\data\projectMemberList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var projectMemberList[]
     */
    public $projectMemberList;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'projectMemberList' => 'ProjectMemberList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('projectMemberList', $this->projectMemberList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->projectMemberList) {
            $res['ProjectMemberList'] = [];
            if (null !== $this->projectMemberList && \is_array($this->projectMemberList)) {
                $n = 0;
                foreach ($this->projectMemberList as $item) {
                    $res['ProjectMemberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ProjectMemberList'])) {
            if (!empty($map['ProjectMemberList'])) {
                $model->projectMemberList = [];
                $n                        = 0;
                foreach ($map['ProjectMemberList'] as $item) {
                    $model->projectMemberList[$n++] = null !== $item ? projectMemberList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
