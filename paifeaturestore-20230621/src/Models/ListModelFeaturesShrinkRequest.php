<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListModelFeaturesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $modelFeatureIdsShrink;

    /**
     * @example model_feature1
     *
     * @var string
     */
    public $name;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @example 12323143****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 4
     *
     * @var string
     */
    public $projectId;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'modelFeatureIdsShrink' => 'ModelFeatureIds',
        'name'                  => 'Name',
        'order'                 => 'Order',
        'owner'                 => 'Owner',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'projectId'             => 'ProjectId',
        'sortBy'                => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelFeatureIdsShrink) {
            $res['ModelFeatureIds'] = $this->modelFeatureIdsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModelFeaturesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelFeatureIds'])) {
            $model->modelFeatureIdsShrink = $map['ModelFeatureIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
