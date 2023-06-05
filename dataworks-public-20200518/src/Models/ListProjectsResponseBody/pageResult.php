<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult\projectList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The DataWorks workspaces returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the workspace. Valid values:
     *
     *   0: AVAILABLE, which indicates that the workspace is running as expected.
     *   1: DELETED, which indicates that the workspace is deleted.
     *   2: INITIALIZING, which indicates that the workspace is being initialized.
     *   3: INIT_FAILED, which indicates that the workspace fails to be initialized.
     *   4: FORBIDDEN, which indicates that the workspace is manually disabled.
     *   5: DELETING, which indicates that the workspace is being deleted.
     *   6: DEL_FAILED, which indicates that the workspace fails to be deleted.
     *   7: FROZEN, which indicates that the workspace is frozen due to overdue payments.
     *   8: UPDATING, which indicates that the workspace is being updated. After you associate a compute engine with the workspace, the system initializes compute engine and updates the workspace.
     *   9: UPDATE_FAILED, which indicates that the workspace fails to be updated.
     *
     * @var projectList[]
     */
    public $projectList;

    /**
     * @description The status code of the workspace. Valid values:
     *
     *   AVAILABLE: 0, which indicates that the workspace is running as expected.
     *   DELETED: 1, which indicates that the workspace is deleted.
     *   INITIALIZING: 2, which indicates that the workspace is being initialized.
     *   INIT_FAILED: 3, which indicates that the workspace fails to be initialized.
     *   FORBIDDEN: 4, which indicates that the workspace is manually disabled.
     *   DELETING: 5, which indicates that the workspace is being deleted.
     *   DEL_FAILED: 6, which indicates that the workspace fails to be deleted.
     *   FROZEN: 7, which indicates that the workspace is frozen due to overdue payments.
     *   UPDATING: 8, which indicates that the workspace is being updated. After you associate a compute engine with the workspace, the system initializes compute engine and updates the workspace.
     *   UPDATE_FAILED: 9, which indicates that the workspace fails to be updated.
     *
     * @example 123
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectList' => 'ProjectList',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->projectList) {
            $res['ProjectList'] = [];
            if (null !== $this->projectList && \is_array($this->projectList)) {
                $n = 0;
                foreach ($this->projectList as $item) {
                    $res['ProjectList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectList'])) {
            if (!empty($map['ProjectList'])) {
                $model->projectList = [];
                $n                  = 0;
                foreach ($map['ProjectList'] as $item) {
                    $model->projectList[$n++] = null !== $item ? projectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
