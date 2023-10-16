<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescirbeCombineTrademarkResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPageNumber;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var bool
     */
    public $nextPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalItemNumber;

    /**
     * @var int
     */
    public $totalPageNumber;
    protected $_name = [
        'currentPageNumber' => 'CurrentPageNumber',
        'data'              => 'Data',
        'nextPage'          => 'NextPage',
        'pageSize'          => 'PageSize',
        'prePage'           => 'PrePage',
        'requestId'         => 'RequestId',
        'totalItemNumber'   => 'TotalItemNumber',
        'totalPageNumber'   => 'TotalPageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageNumber) {
            $res['CurrentPageNumber'] = $this->currentPageNumber;
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
        if (null !== $this->totalItemNumber) {
            $res['TotalItemNumber'] = $this->totalItemNumber;
        }
        if (null !== $this->totalPageNumber) {
            $res['TotalPageNumber'] = $this->totalPageNumber;
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
        if (isset($map['CurrentPageNumber'])) {
            $model->currentPageNumber = $map['CurrentPageNumber'];
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
        if (isset($map['TotalItemNumber'])) {
            $model->totalItemNumber = $map['TotalItemNumber'];
        }
        if (isset($map['TotalPageNumber'])) {
            $model->totalPageNumber = $map['TotalPageNumber'];
        }

        return $model;
    }
}
