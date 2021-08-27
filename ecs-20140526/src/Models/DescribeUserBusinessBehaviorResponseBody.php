<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBusinessBehaviorResponseBody extends Model
{
    /**
     * @var string
     */
    public $statusValue;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'statusValue' => 'StatusValue',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusValue) {
            $res['StatusValue'] = $this->statusValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBusinessBehaviorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatusValue'])) {
            $model->statusValue = $map['StatusValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
