<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListProjectMembersRequest extends Model
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
    public $projectId;

    /**
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'roleCodes' => 'RoleCodes',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
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

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['RoleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['RoleCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1++] = $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['RoleCodes'] as $item1) {
                    $model->roleCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
