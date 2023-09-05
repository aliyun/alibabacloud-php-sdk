<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListApplicationMonitorDetectResultResponseBody\applicationMonitorDetectResultList;
use AlibabaCloud\Tea\Model;

class ListApplicationMonitorDetectResultResponseBody extends Model
{
    /**
     * @description Details about the diagnostic result of the origin probing task.
     *
     * @var applicationMonitorDetectResultList[]
     */
    public $applicationMonitorDetectResultList;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationMonitorDetectResultList' => 'ApplicationMonitorDetectResultList',
        'pageNumber'                         => 'PageNumber',
        'pageSize'                           => 'PageSize',
        'requestId'                          => 'RequestId',
        'totalCount'                         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationMonitorDetectResultList) {
            $res['ApplicationMonitorDetectResultList'] = [];
            if (null !== $this->applicationMonitorDetectResultList && \is_array($this->applicationMonitorDetectResultList)) {
                $n = 0;
                foreach ($this->applicationMonitorDetectResultList as $item) {
                    $res['ApplicationMonitorDetectResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListApplicationMonitorDetectResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationMonitorDetectResultList'])) {
            if (!empty($map['ApplicationMonitorDetectResultList'])) {
                $model->applicationMonitorDetectResultList = [];
                $n                                         = 0;
                foreach ($map['ApplicationMonitorDetectResultList'] as $item) {
                    $model->applicationMonitorDetectResultList[$n++] = null !== $item ? applicationMonitorDetectResultList::fromMap($item) : $item;
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
