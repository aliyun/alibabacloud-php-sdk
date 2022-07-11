<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBusinessBehaviorResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $statusValue;
    protected $_name = [
        'requestId'   => 'RequestId',
        'statusValue' => 'StatusValue',
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
        if (null !== $this->statusValue) {
            $res['StatusValue'] = $this->statusValue;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusValue'])) {
            $model->statusValue = $map['StatusValue'];
        }

        return $model;
    }
}
