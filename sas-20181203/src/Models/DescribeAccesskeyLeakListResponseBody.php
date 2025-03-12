<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody\accessKeyLeakList;
use AlibabaCloud\Tea\Model;

class DescribeAccesskeyLeakListResponseBody extends Model
{
    /**
     * @description An array that consists of the details about AccessKey pair leaks.
     *
     * @var accessKeyLeakList[]
     */
    public $accessKeyLeakList;

    /**
     * @description The number of AccessKey pair leaks that are unhandled.
     *
     * @example 1
     *
     * @var int
     */
    public $akLeakCount;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1612357897000
     *
     * @var int
     */
    public $gmtLast;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B37C9052-A73E-4707-A024-9247702852BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of AccessKey pair leaks.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessKeyLeakList' => 'AccessKeyLeakList',
        'akLeakCount'       => 'AkLeakCount',
        'currentPage'       => 'CurrentPage',
        'gmtLast'           => 'GmtLast',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyLeakList) {
            $res['AccessKeyLeakList'] = [];
            if (null !== $this->accessKeyLeakList && \is_array($this->accessKeyLeakList)) {
                $n = 0;
                foreach ($this->accessKeyLeakList as $item) {
                    $res['AccessKeyLeakList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->akLeakCount) {
            $res['AkLeakCount'] = $this->akLeakCount;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
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
     * @return DescribeAccesskeyLeakListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyLeakList'])) {
            if (!empty($map['AccessKeyLeakList'])) {
                $model->accessKeyLeakList = [];
                $n                        = 0;
                foreach ($map['AccessKeyLeakList'] as $item) {
                    $model->accessKeyLeakList[$n++] = null !== $item ? accessKeyLeakList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AkLeakCount'])) {
            $model->akLeakCount = $map['AkLeakCount'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
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
