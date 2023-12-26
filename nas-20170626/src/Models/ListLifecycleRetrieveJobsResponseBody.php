<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponseBody\lifecycleRetrieveJobs;
use AlibabaCloud\Tea\Model;

class ListLifecycleRetrieveJobsResponseBody extends Model
{
    /**
     * @description The details about the data retrieval tasks.
     *
     * @var lifecycleRetrieveJobs[]
     */
    public $lifecycleRetrieveJobs;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example BC7C825C-5F65-4B56-BEF6-98C56C7C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of data retrieval tasks.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecycleRetrieveJobs' => 'LifecycleRetrieveJobs',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleRetrieveJobs) {
            $res['LifecycleRetrieveJobs'] = [];
            if (null !== $this->lifecycleRetrieveJobs && \is_array($this->lifecycleRetrieveJobs)) {
                $n = 0;
                foreach ($this->lifecycleRetrieveJobs as $item) {
                    $res['LifecycleRetrieveJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLifecycleRetrieveJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleRetrieveJobs'])) {
            if (!empty($map['LifecycleRetrieveJobs'])) {
                $model->lifecycleRetrieveJobs = [];
                $n                            = 0;
                foreach ($map['LifecycleRetrieveJobs'] as $item) {
                    $model->lifecycleRetrieveJobs[$n++] = null !== $item ? lifecycleRetrieveJobs::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
