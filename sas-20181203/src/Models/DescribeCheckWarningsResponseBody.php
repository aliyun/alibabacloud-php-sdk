<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponseBody\checkWarnings;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var checkWarnings[]
     */
    public $checkWarnings;

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
    public $currentPage;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'checkWarnings' => 'CheckWarnings',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'currentPage'   => 'CurrentPage',
        'count'         => 'Count',
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
        if (null !== $this->checkWarnings) {
            $res['CheckWarnings'] = [];
            if (null !== $this->checkWarnings && \is_array($this->checkWarnings)) {
                $n = 0;
                foreach ($this->checkWarnings as $item) {
                    $res['CheckWarnings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['CheckWarnings'])) {
            if (!empty($map['CheckWarnings'])) {
                $model->checkWarnings = [];
                $n                    = 0;
                foreach ($map['CheckWarnings'] as $item) {
                    $model->checkWarnings[$n++] = null !== $item ? checkWarnings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
