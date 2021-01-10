<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts;
use AlibabaCloud\Tea\Model;

class DescribeCasterLayoutsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layouts
     */
    public $layouts;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'layouts'   => 'Layouts',
        'total'     => 'Total',
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
        if (null !== $this->layouts) {
            $res['Layouts'] = null !== $this->layouts ? $this->layouts->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterLayoutsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Layouts'])) {
            $model->layouts = layouts::fromMap($map['Layouts']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
