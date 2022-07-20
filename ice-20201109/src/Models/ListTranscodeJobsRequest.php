<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListTranscodeJobsRequest extends Model
{
    /**
     * @description 任务创建时间筛选条件的结束时间
     *
     * @var string
     */
    public $endOfCreateTime;

    /**
     * @description 按 jobId 筛选
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 连续分页查询时下一页的标记 (第一页没有)
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description 排序顺序，目前只支持两种：CreateTimeDesc 和 CreateTimeAsc
     *
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description 任务创建时间筛选条件的起始时间
     *
     * @var string
     */
    public $startOfCreateTime;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endOfCreateTime'   => 'EndOfCreateTime',
        'jobId'             => 'JobId',
        'nextPageToken'     => 'NextPageToken',
        'orderBy'           => 'OrderBy',
        'pageSize'          => 'PageSize',
        'startOfCreateTime' => 'StartOfCreateTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endOfCreateTime) {
            $res['EndOfCreateTime'] = $this->endOfCreateTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startOfCreateTime) {
            $res['StartOfCreateTime'] = $this->startOfCreateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTranscodeJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndOfCreateTime'])) {
            $model->endOfCreateTime = $map['EndOfCreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartOfCreateTime'])) {
            $model->startOfCreateTime = $map['StartOfCreateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
