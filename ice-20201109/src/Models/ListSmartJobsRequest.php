<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSmartJobsRequest extends Model
{
    /**
     * @description 任务状态
     *
     * @var string
     */
    public $jobState;

    /**
     * @description 任务类型
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 分页大小。最大不超过100。  默认值：10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 当前开始读取的位置
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 当前页码。默认值为1。
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 分页大小，每页显示条数。默认值为10，最大值为100。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 排序参数，默认根据创建时间倒序
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'jobState'   => 'JobState',
        'jobType'    => 'JobType',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobState) {
            $res['JobState'] = $this->jobState;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobState'])) {
            $model->jobState = $map['JobState'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
