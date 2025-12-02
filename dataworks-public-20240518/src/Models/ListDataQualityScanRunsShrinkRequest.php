<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDataQualityScanRunsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $createTimeFrom;

    /**
     * @var int
     */
    public $createTimeTo;

    /**
     * @var int
     */
    public $dataQualityScanId;

    /**
     * @var string
     */
    public $filterShrink;

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
    public $sortBy;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTimeFrom' => 'CreateTimeFrom',
        'createTimeTo' => 'CreateTimeTo',
        'dataQualityScanId' => 'DataQualityScanId',
        'filterShrink' => 'Filter',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sortBy' => 'SortBy',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeFrom) {
            $res['CreateTimeFrom'] = $this->createTimeFrom;
        }

        if (null !== $this->createTimeTo) {
            $res['CreateTimeTo'] = $this->createTimeTo;
        }

        if (null !== $this->dataQualityScanId) {
            $res['DataQualityScanId'] = $this->dataQualityScanId;
        }

        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTimeFrom'])) {
            $model->createTimeFrom = $map['CreateTimeFrom'];
        }

        if (isset($map['CreateTimeTo'])) {
            $model->createTimeTo = $map['CreateTimeTo'];
        }

        if (isset($map['DataQualityScanId'])) {
            $model->dataQualityScanId = $map['DataQualityScanId'];
        }

        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
