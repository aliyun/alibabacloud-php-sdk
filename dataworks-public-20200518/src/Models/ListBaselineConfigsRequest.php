<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListBaselineConfigsRequest extends Model
{
    /**
     * @example DAILY,HOURLY
     *
     * @var string
     */
    public $baselineTypes;

    /**
     * @example 95279527****
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
     * @example 1,3,5,7,8
     *
     * @var string
     */
    public $priority;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $searchText;

    /**
     * @example true
     *
     * @var bool
     */
    public $useflag;
    protected $_name = [
        'baselineTypes' => 'BaselineTypes',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'priority'      => 'Priority',
        'projectId'     => 'ProjectId',
        'searchText'    => 'SearchText',
        'useflag'       => 'Useflag',
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
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBaselineConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineTypes'])) {
            $model->baselineTypes = $map['BaselineTypes'];
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
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }

        return $model;
    }
}
