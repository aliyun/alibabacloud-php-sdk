<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponseBody\warningSummarys;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $count;

    /**
     * @var warningSummarys[]
     */
    public $warningSummarys;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'count'           => 'Count',
        'warningSummarys' => 'WarningSummarys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
