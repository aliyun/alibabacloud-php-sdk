<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListJobGroupsRequest extends Model
{
    /**
     * @var bool
     */
    public $asyncQuery;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupStatusFilter;

    /**
     * @var bool
     */
    public $onlyMinConcurrencyEnabled;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchText;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'asyncQuery' => 'AsyncQuery',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'jobGroupStatusFilter' => 'JobGroupStatusFilter',
        'onlyMinConcurrencyEnabled' => 'OnlyMinConcurrencyEnabled',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchText' => 'SearchText',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncQuery) {
            $res['AsyncQuery'] = $this->asyncQuery;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupStatusFilter) {
            $res['JobGroupStatusFilter'] = $this->jobGroupStatusFilter;
        }

        if (null !== $this->onlyMinConcurrencyEnabled) {
            $res['OnlyMinConcurrencyEnabled'] = $this->onlyMinConcurrencyEnabled;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AsyncQuery'])) {
            $model->asyncQuery = $map['AsyncQuery'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupStatusFilter'])) {
            $model->jobGroupStatusFilter = $map['JobGroupStatusFilter'];
        }

        if (isset($map['OnlyMinConcurrencyEnabled'])) {
            $model->onlyMinConcurrencyEnabled = $map['OnlyMinConcurrencyEnabled'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
