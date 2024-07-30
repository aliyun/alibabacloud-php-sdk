<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs;
use AlibabaCloud\Tea\Model;

class ListSynchronizationJobsResponseBody extends Model
{
    /**
     * @description 本次调用返回的查询凭证（Token）值，用于下一次翻页查询。
     *
     * @example NTxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var synchronizationJobs[]
     */
    public $synchronizationJobs;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
        'synchronizationJobs' => 'SynchronizationJobs',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->synchronizationJobs) {
            $res['SynchronizationJobs'] = [];
            if (null !== $this->synchronizationJobs && \is_array($this->synchronizationJobs)) {
                $n = 0;
                foreach ($this->synchronizationJobs as $item) {
                    $res['SynchronizationJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSynchronizationJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SynchronizationJobs'])) {
            if (!empty($map['SynchronizationJobs'])) {
                $model->synchronizationJobs = [];
                $n                          = 0;
                foreach ($map['SynchronizationJobs'] as $item) {
                    $model->synchronizationJobs[$n++] = null !== $item ? synchronizationJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
