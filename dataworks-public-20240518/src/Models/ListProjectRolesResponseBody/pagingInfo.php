<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponseBody\pagingInfo\projectRoles;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var projectRoles[]
     */
    public $projectRoles;

    /**
     * @example 42
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'projectRoles' => 'ProjectRoles',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->projectRoles) {
            $res['ProjectRoles'] = [];
            if (null !== $this->projectRoles && \is_array($this->projectRoles)) {
                $n = 0;
                foreach ($this->projectRoles as $item) {
                    $res['ProjectRoles'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ProjectRoles'])) {
            if (!empty($map['ProjectRoles'])) {
                $model->projectRoles = [];
                $n                   = 0;
                foreach ($map['ProjectRoles'] as $item) {
                    $model->projectRoles[$n++] = null !== $item ? projectRoles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
