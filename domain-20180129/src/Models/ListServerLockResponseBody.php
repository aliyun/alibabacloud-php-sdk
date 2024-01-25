<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListServerLockResponseBody extends Model
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
     * @description The response parameters.
     *
     * @var data[]
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
     * @description The request ID.
     *
     * @example 9DFCF6F8-243C-****-8035-4B12FEFD7D48
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
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
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListServerLockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
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
