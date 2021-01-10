<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList;
use AlibabaCloud\Tea\Model;

class DescribeCastersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var casterList
     */
    public $casterList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'casterList' => 'CasterList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->casterList) {
            $res['CasterList'] = null !== $this->casterList ? $this->casterList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['CasterList'])) {
            $model->casterList = casterList::fromMap($map['CasterList']);
        }

        return $model;
    }
}
