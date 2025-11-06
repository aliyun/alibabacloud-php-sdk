<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data;

class ScrollDomainListResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var int
     */
    public $totalItemNum;
    protected $_name = [
        'data' => 'Data',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'scrollId' => 'ScrollId',
        'totalItemNum' => 'TotalItemNum',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
        }

        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
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
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }

        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }

        return $model;
    }
}
