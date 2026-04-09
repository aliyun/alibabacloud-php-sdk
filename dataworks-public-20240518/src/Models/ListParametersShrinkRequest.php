<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListParametersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $idsShrink;

    /**
     * @var string
     */
    public $namesShrink;

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
        'idsShrink' => 'Ids',
        'namesShrink' => 'Names',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }

        if (null !== $this->namesShrink) {
            $res['Names'] = $this->namesShrink;
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
            $model->idsShrink = $map['Ids'];
        }

        if (isset($map['Names'])) {
            $model->namesShrink = $map['Names'];
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
