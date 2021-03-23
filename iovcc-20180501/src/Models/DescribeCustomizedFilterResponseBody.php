<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeCustomizedFilterResponseBody\customizedFilter;
use AlibabaCloud\Tea\Model;

class DescribeCustomizedFilterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var customizedFilter
     */
    public $customizedFilter;
    protected $_name = [
        'requestId'        => 'RequestId',
        'customizedFilter' => 'CustomizedFilter',
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
        if (null !== $this->customizedFilter) {
            $res['CustomizedFilter'] = null !== $this->customizedFilter ? $this->customizedFilter->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomizedFilter'])) {
            $model->customizedFilter = customizedFilter::fromMap($map['CustomizedFilter']);
        }

        return $model;
    }
}
