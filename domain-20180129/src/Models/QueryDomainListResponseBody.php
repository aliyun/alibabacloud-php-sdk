<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainListResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryDomainListResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 0
     *
     * @var int
     */
    public $currentPageNum;

    /**
     * @description The domain names.
     *
     * @var data
     */
    public $data;

    /**
     * @description Indicates whether the current page is followed by a page.
     *
     * @example false
     *
     * @var bool
     */
    public $nextPage;

    /**
     * @description The number of entries per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Indicates whether the current page is preceded by a page.
     *
     * @example false
     *
     * @var bool
     */
    public $prePage;

    /**
     * @description The ID of the request.
     *
     * @example B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of domain names returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalItemNum;

    /**
     * @description The total number of pages returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'data'           => 'Data',
        'nextPage'       => 'NextPage',
        'pageSize'       => 'PageSize',
        'prePage'        => 'PrePage',
        'requestId'      => 'RequestId',
        'totalItemNum'   => 'TotalItemNum',
        'totalPageNum'   => 'TotalPageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
