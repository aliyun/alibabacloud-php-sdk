<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListBaselinesRequest extends Model
{
    /**
     * @example DAILY
     *
     * @var string
     */
    public $baselineTypes;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 3726346****
     *
     * @var string
     */
    public $owner;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $projectId;

    /**
     * @example baselineName
     *
     * @var string
     */
    public $searchText;
    protected $_name = [
        'baselineTypes' => 'BaselineTypes',
        'enable'        => 'Enable',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'priority'      => 'Priority',
        'projectId'     => 'ProjectId',
        'searchText'    => 'SearchText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineTypes) {
            $res['BaselineTypes'] = $this->baselineTypes;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBaselinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineTypes'])) {
            $model->baselineTypes = $map['BaselineTypes'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}
