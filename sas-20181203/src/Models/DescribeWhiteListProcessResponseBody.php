<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListProcessResponseBody\processes;
use AlibabaCloud\Tea\Model;

class DescribeWhiteListProcessResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries per page.
     *
     * @example 200
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about the processes.
     *
     * @var processes[]
     */
    public $processes;

    /**
     * @description The request ID.
     *
     * @example D81DD78E-E006-5C65-A171-C8CB09XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 44
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'processes' => 'Processes',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
        if (null !== $this->processes) {
            $res['Processes'] = [];
            if (null !== $this->processes && \is_array($this->processes)) {
                $n = 0;
                foreach ($this->processes as $item) {
                    $res['Processes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeWhiteListProcessResponseBody
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
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n = 0;
                foreach ($map['Processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
                }
            }
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
