<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescirbeCombineTrademarkResponseBody extends Model
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
     * @var int
     */
    public $totalPageNumber;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var int
     */
    public $currentPageNumber;

    /**
     * @var int
     */
    public $totalItemNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var data[]
     */
    public $data;
    protected $_name = [
        'nextPage'          => 'NextPage',
        'requestId'         => 'RequestId',
        'totalPageNumber'   => 'TotalPageNumber',
        'prePage'           => 'PrePage',
        'currentPageNumber' => 'CurrentPageNumber',
        'totalItemNumber'   => 'TotalItemNumber',
        'pageSize'          => 'PageSize',
        'data'              => 'Data',
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
        if (null !== $this->totalPageNumber) {
            $res['TotalPageNumber'] = $this->totalPageNumber;
        }
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->currentPageNumber) {
            $res['CurrentPageNumber'] = $this->currentPageNumber;
        }
        if (null !== $this->totalItemNumber) {
            $res['TotalItemNumber'] = $this->totalItemNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescirbeCombineTrademarkResponseBody
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
        if (isset($map['TotalPageNumber'])) {
            $model->totalPageNumber = $map['TotalPageNumber'];
        }
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['CurrentPageNumber'])) {
            $model->currentPageNumber = $map['CurrentPageNumber'];
        }
        if (isset($map['TotalItemNumber'])) {
            $model->totalItemNumber = $map['TotalItemNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
