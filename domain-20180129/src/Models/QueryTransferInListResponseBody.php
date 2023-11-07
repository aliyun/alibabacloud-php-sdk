<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTransferInListResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryTransferInListResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPageNum;

    /**
     * @var data
     */
    public $data;

    /**
     * @example true
     *
     * @var bool
     */
    public $nextPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $prePage;

    /**
     * @example AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 40
     *
     * @var int
     */
    public $totalItemNum;

    /**
     * @example 2
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
     * @return QueryTransferInListResponseBody
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
