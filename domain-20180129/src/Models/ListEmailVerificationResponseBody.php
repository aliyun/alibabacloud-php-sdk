<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\ListEmailVerificationResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListEmailVerificationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalPageNum;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var bool
     */
    public $nextPage;
    protected $_name = [
        'prePage'        => 'PrePage',
        'currentPageNum' => 'CurrentPageNum',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'totalPageNum'   => 'TotalPageNum',
        'data'           => 'Data',
        'totalItemNum'   => 'TotalItemNum',
        'nextPage'       => 'NextPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
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
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmailVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
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
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        return $model;
    }
}
