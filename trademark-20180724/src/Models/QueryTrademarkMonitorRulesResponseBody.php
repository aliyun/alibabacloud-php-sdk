<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryTrademarkMonitorRulesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $nextPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var int
     */
    public $totalPageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'nextPage'       => 'NextPage',
        'requestId'      => 'RequestId',
        'prePage'        => 'PrePage',
        'totalItemNum'   => 'TotalItemNum',
        'currentPageNum' => 'CurrentPageNum',
        'totalPageNum'   => 'TotalPageNum',
        'pageSize'       => 'PageSize',
        'data'           => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkMonitorRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
