<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponseBody\pagingInfo\projectRoles;

class pagingInfo extends Model
{
    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var projectRoles[]
     */
    public $projectRoles;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectRoles' => 'ProjectRoles',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->projectRoles)) {
            Model::validateArray($this->projectRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectRoles) {
            if (\is_array($this->projectRoles)) {
                $res['ProjectRoles'] = [];
                $n1 = 0;
                foreach ($this->projectRoles as $item1) {
                    $res['ProjectRoles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectRoles'])) {
            if (!empty($map['ProjectRoles'])) {
                $model->projectRoles = [];
                $n1 = 0;
                foreach ($map['ProjectRoles'] as $item1) {
                    $model->projectRoles[$n1++] = projectRoles::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
