<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectMembersResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectMembersResponseBody\pagingInfo\projectMembers;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The members in the workspace.
     *
     * @var projectMembers[]
     */
    public $projectMembers;

    /**
     * @description The total number of entries returned.
     *
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectMembers' => 'ProjectMembers',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
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
        if (null !== $this->projectMembers) {
            $res['ProjectMembers'] = [];
            if (null !== $this->projectMembers && \is_array($this->projectMembers)) {
                $n = 0;
                foreach ($this->projectMembers as $item) {
                    $res['ProjectMembers'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pagingInfo
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
        if (isset($map['ProjectMembers'])) {
            if (!empty($map['ProjectMembers'])) {
                $model->projectMembers = [];
                $n                     = 0;
                foreach ($map['ProjectMembers'] as $item) {
                    $model->projectMembers[$n++] = null !== $item ? projectMembers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
