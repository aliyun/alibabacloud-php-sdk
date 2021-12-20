<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackInfo', $this->stackInfo, true);
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
     * @return DescribeAlarmEventStackInfoResponse
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
