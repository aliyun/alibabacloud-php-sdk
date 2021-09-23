<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponseBody\lifecycleRetrieveJobs;
use AlibabaCloud\Tea\Model;

class ListLifecycleRetrieveJobsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var lifecycleRetrieveJobs[]
     */
    public $lifecycleRetrieveJobs;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'requestId'             => 'RequestId',
        'pageSize'              => 'PageSize',
        'pageNumber'            => 'PageNumber',
        'lifecycleRetrieveJobs' => 'LifecycleRetrieveJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->lifecycleRetrieveJobs) {
            $res['LifecycleRetrieveJobs'] = [];
            if (null !== $this->lifecycleRetrieveJobs && \is_array($this->lifecycleRetrieveJobs)) {
                $n = 0;
                foreach ($this->lifecycleRetrieveJobs as $item) {
                    $res['LifecycleRetrieveJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LifecycleRetrieveJobs'])) {
            if (!empty($map['LifecycleRetrieveJobs'])) {
                $model->lifecycleRetrieveJobs = [];
                $n                            = 0;
                foreach ($map['LifecycleRetrieveJobs'] as $item) {
                    $model->lifecycleRetrieveJobs[$n++] = null !== $item ? lifecycleRetrieveJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
