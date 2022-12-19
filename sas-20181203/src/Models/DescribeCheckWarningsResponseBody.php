<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody\checkWarnings;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningsResponseBody extends Model
{
    /**
     * @description An array that consists of the check items.
     *
     * @var checkWarnings[]
     */
    public $checkWarnings;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0DFCADBA-7065-42DA-AF17-6868B9C2A8CF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'checkWarnings' => 'CheckWarnings',
        'count'         => 'Count',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkWarnings) {
            $res['CheckWarnings'] = [];
            if (null !== $this->checkWarnings && \is_array($this->checkWarnings)) {
                $n = 0;
                foreach ($this->checkWarnings as $item) {
                    $res['CheckWarnings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckWarnings'])) {
            if (!empty($map['CheckWarnings'])) {
                $model->checkWarnings = [];
                $n                    = 0;
                foreach ($map['CheckWarnings'] as $item) {
                    $model->checkWarnings[$n++] = null !== $item ? checkWarnings::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
