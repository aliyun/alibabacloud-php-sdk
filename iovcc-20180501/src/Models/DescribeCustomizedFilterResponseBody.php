<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeCustomizedFilterResponseBody\customizedFilter;
use AlibabaCloud\Tea\Model;

class DescribeCustomizedFilterResponseBody extends Model
{
    /**
     * @var customizedFilter
     */
    public $customizedFilter;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customizedFilter' => 'CustomizedFilter',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedFilter) {
            $res['CustomizedFilter'] = null !== $this->customizedFilter ? $this->customizedFilter->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizedFilterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizedFilter'])) {
            $model->customizedFilter = customizedFilter::fromMap($map['CustomizedFilter']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
