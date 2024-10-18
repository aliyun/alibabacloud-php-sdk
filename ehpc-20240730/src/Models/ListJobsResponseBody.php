<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs;
use AlibabaCloud\Tea\Model;

class ListJobsResponseBody extends Model
{
    /**
     * @description The returned jobs.
     *
     * @var jobs[]
     */
    public $jobs;

    /**
     * @description The page number. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example EABFBD93-58BE-53F3-BBFE-8654BB2E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobs'       => 'Jobs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['Jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['Jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n           = 0;
                foreach ($map['Jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
