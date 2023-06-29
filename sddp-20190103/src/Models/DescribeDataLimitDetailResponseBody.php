<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailResponseBody\dataLimit;
use AlibabaCloud\Tea\Model;

class DescribeDataLimitDetailResponseBody extends Model
{
    /**
     * @description The details of the data asset.
     *
     * @var dataLimit
     */
    public $dataLimit;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 769FB3C1-F4C9-42DF-9B72-7077A8989C13
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataLimit' => 'DataLimit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLimit) {
            $res['DataLimit'] = null !== $this->dataLimit ? $this->dataLimit->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimit'])) {
            $model->dataLimit = dataLimit::fromMap($map['DataLimit']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
