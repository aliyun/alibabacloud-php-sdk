<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponseBody\bindList;
use AlibabaCloud\Tea\Model;

class DescribeWebLockBindListResponseBody extends Model
{
    /**
     * @description The information about the servers that have web tamper proofing enabled.
     *
     * @var bindList[]
     */
    public $bindList;

    /**
     * @description The page number of the returned page. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries returned per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D9354C1A-D709-4873-9AAE-41513327B247
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of servers that have web tamper proofing enabled.
     *
     * @example 11409
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bindList'    => 'BindList',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindList) {
            $res['BindList'] = [];
            if (null !== $this->bindList && \is_array($this->bindList)) {
                $n = 0;
                foreach ($this->bindList as $item) {
                    $res['BindList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeWebLockBindListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindList'])) {
            if (!empty($map['BindList'])) {
                $model->bindList = [];
                $n               = 0;
                foreach ($map['BindList'] as $item) {
                    $model->bindList[$n++] = null !== $item ? bindList::fromMap($item) : $item;
                }
            }
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
