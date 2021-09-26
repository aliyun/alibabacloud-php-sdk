<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailResponseBody\dataLimit;
use AlibabaCloud\Tea\Model;

class DescribeDataLimitDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataLimit
     */
    public $dataLimit;
    protected $_name = [
        'requestId' => 'RequestId',
        'dataLimit' => 'DataLimit',
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
        if (null !== $this->dataLimit) {
            $res['DataLimit'] = null !== $this->dataLimit ? $this->dataLimit->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataLimit'])) {
            $model->dataLimit = dataLimit::fromMap($map['DataLimit']);
        }

        return $model;
    }
}
