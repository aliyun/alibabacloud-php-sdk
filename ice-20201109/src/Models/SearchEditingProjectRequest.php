<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchEditingProjectRequest extends Model
{
    /**
     * @description CreateTime（创建时间）的开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description CreationTime（创建时间）的结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 云剪辑工程状态。多个用逗号分隔
     *
     * @var string
     */
    public $status;

    /**
     * @description 结果排序方式
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description 分页参数
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'status'     => 'Status',
        'sortBy'     => 'SortBy',
        'nextToken'  => 'NextToken',
        'maxResults' => 'MaxResults',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
