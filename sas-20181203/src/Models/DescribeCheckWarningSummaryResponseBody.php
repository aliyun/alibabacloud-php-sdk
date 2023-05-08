<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody\warningSummarys;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningSummaryResponseBody extends Model
{
    /**
     * @description The level-1 type of the check item. Examples: database, system, weak password, and middleware.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description Indicates whether the risk item can be exploited. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~182997~~) operation to query the IDs of container clusters.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 00BD7CE2-284A-4534-BD09-FB69836DD750
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the risk item.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of medium-risk items.
     *
     * @var warningSummarys[]
     */
    public $warningSummarys;
    protected $_name = [
        'count'           => 'Count',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'warningSummarys' => 'WarningSummarys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->warningSummarys) {
            $res['WarningSummarys'] = [];
            if (null !== $this->warningSummarys && \is_array($this->warningSummarys)) {
                $n = 0;
                foreach ($this->warningSummarys as $item) {
                    $res['WarningSummarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['WarningSummarys'])) {
            if (!empty($map['WarningSummarys'])) {
                $model->warningSummarys = [];
                $n                      = 0;
                foreach ($map['WarningSummarys'] as $item) {
                    $model->warningSummarys[$n++] = null !== $item ? warningSummarys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
