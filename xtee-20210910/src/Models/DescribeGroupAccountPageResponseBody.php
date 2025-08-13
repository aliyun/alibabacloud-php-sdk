<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupAccountPageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $data;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'requestId' => 'RequestId',
        'currentPage' => 'currentPage',
        'data' => 'data',
        'pageSize' => 'pageSize',
        'totalItem' => 'totalItem',
        'totalPage' => 'totalPage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }

        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }

        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
