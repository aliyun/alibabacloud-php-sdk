<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListParametersRequest extends Model
{
    /**
     * @var int[]
     */
    public $ids;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var string
     */
    public $owner;

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
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ids' => 'Ids',
        'names' => 'Names',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'scope' => 'Scope',
        'sortBy' => 'SortBy',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        if (\is_array($this->names)) {
            Model::validateArray($this->names);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1 = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->names) {
            if (\is_array($this->names)) {
                $res['Names'] = [];
                $n1 = 0;
                foreach ($this->names as $item1) {
                    $res['Names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1 = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = [];
                $n1 = 0;
                foreach ($map['Names'] as $item1) {
                    $model->names[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
