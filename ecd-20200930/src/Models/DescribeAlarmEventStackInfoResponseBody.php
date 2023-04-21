<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The stack information of the alert details.
     *
     * @example 3011 ruby -rosocket -e exit xxxx
     *
     * @var string
     */
    public $stackInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackInfo' => 'StackInfo',
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
        if (null !== $this->stackInfo) {
            $res['StackInfo'] = $this->stackInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmEventStackInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInfo'])) {
            $model->stackInfo = $map['StackInfo'];
        }

        return $model;
    }
}
