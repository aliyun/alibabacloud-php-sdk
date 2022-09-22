<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeOrderAutoRebootTimeResponseBody\describeOrderAutoRebootTimeInfo;
use AlibabaCloud\Tea\Model;

class DescribeOrderAutoRebootTimeResponseBody extends Model
{
    /**
     * @var describeOrderAutoRebootTimeInfo
     */
    public $describeOrderAutoRebootTimeInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeOrderAutoRebootTimeInfo' => 'DescribeOrderAutoRebootTimeInfo',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeOrderAutoRebootTimeInfo) {
            $res['DescribeOrderAutoRebootTimeInfo'] = null !== $this->describeOrderAutoRebootTimeInfo ? $this->describeOrderAutoRebootTimeInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrderAutoRebootTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeOrderAutoRebootTimeInfo'])) {
            $model->describeOrderAutoRebootTimeInfo = describeOrderAutoRebootTimeInfo::fromMap($map['DescribeOrderAutoRebootTimeInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
