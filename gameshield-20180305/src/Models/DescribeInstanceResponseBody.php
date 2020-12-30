<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeInstanceResponseBody\instanceInfo;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'promptInfo'   => 'PromptInfo',
        'instanceInfo' => 'InstanceInfo',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }

        return $model;
    }
}
