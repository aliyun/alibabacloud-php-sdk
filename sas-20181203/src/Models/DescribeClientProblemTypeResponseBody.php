<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientProblemTypeResponseBody\problemTypes;
use AlibabaCloud\Tea\Model;

class DescribeClientProblemTypeResponseBody extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 4
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
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The issue types.
     *
     * @var problemTypes[]
     */
    public $problemTypes;

    /**
     * @description The request ID.
     *
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53CXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 21
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'problemTypes' => 'ProblemTypes',
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
        if (null !== $this->problemTypes) {
            $res['ProblemTypes'] = [];
            if (null !== $this->problemTypes && \is_array($this->problemTypes)) {
                $n = 0;
                foreach ($this->problemTypes as $item) {
                    $res['ProblemTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeClientProblemTypeResponseBody
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
        if (isset($map['ProblemTypes'])) {
            if (!empty($map['ProblemTypes'])) {
                $model->problemTypes = [];
                $n = 0;
                foreach ($map['ProblemTypes'] as $item) {
                    $model->problemTypes[$n++] = null !== $item ? problemTypes::fromMap($item) : $item;
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
