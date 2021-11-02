<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
