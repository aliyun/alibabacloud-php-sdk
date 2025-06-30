<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailResponseBody\dataLimit;

class DescribeDataLimitDetailResponseBody extends Model
{
    /**
     * @var dataLimit
     */
    public $dataLimit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataLimit' => 'DataLimit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataLimit) {
            $this->dataLimit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataLimit) {
            $res['DataLimit'] = null !== $this->dataLimit ? $this->dataLimit->toArray($noStream) : $this->dataLimit;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataLimit'])) {
            $model->dataLimit = dataLimit::fromMap($map['DataLimit']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
