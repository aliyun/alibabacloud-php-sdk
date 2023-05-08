<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistResponseBody\vulWhitelists;
use AlibabaCloud\Tea\Model;

class DescribeVulWhitelistResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 2
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
     * @example 74F97EF7-B543-43FD-A4E9-18456731F9C5
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

    /**
     * @description An array that consists of information about the whitelist of vulnerabilities.
     *
     * @var vulWhitelists[]
     */
    public $vulWhitelists;
    protected $_name = [
        'count'         => 'Count',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'vulWhitelists' => 'VulWhitelists',
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
        if (null !== $this->vulWhitelists) {
            $res['VulWhitelists'] = [];
            if (null !== $this->vulWhitelists && \is_array($this->vulWhitelists)) {
                $n = 0;
                foreach ($this->vulWhitelists as $item) {
                    $res['VulWhitelists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulWhitelistResponseBody
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
        if (isset($map['VulWhitelists'])) {
            if (!empty($map['VulWhitelists'])) {
                $model->vulWhitelists = [];
                $n                    = 0;
                foreach ($map['VulWhitelists'] as $item) {
                    $model->vulWhitelists[$n++] = null !== $item ? vulWhitelists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
