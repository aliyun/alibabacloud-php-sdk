<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListSystemLogsRequest extends Model
{
    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @example 2020-12-08T16:00:00Z
     *
     * @var string
     */
    public $gmtEndTime;

    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $gmtStartTime;

    /**
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Error
     *
     * @var string
     */
    public $logLevel;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example InstanceStartFailed
     *
     * @var string
     */
    public $problemCategory;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 473469C7-******5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $sourceRequestId;

    /**
     * @example NotebookMainContainerLogs
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'gmtEndTime' => 'GmtEndTime',
        'gmtStartTime' => 'GmtStartTime',
        'instanceId' => 'InstanceId',
        'logLevel' => 'LogLevel',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'problemCategory' => 'ProblemCategory',
        'sortBy' => 'SortBy',
        'sourceRequestId' => 'SourceRequestId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }
        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->problemCategory) {
            $res['ProblemCategory'] = $this->problemCategory;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceRequestId) {
            $res['SourceRequestId'] = $this->sourceRequestId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }
        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProblemCategory'])) {
            $model->problemCategory = $map['ProblemCategory'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceRequestId'])) {
            $model->sourceRequestId = $map['SourceRequestId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
