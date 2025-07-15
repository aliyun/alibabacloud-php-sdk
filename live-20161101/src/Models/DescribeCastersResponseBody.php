<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList;
use AlibabaCloud\Tea\Model;

class DescribeCastersResponseBody extends Model
{
    /**
     * @description The production studios.
     *
     * @var casterList
     */
    public $casterList;

    /**
     * @description The request ID.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b9676b3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of production studios.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'casterList' => 'CasterList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterList) {
            $res['CasterList'] = null !== $this->casterList ? $this->casterList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCastersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterList'])) {
            $model->casterList = casterList::fromMap($map['CasterList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
