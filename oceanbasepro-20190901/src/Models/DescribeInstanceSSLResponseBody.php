<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSSLResponseBody\instanceSSL;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSSLResponseBody extends Model
{
    /**
     * @var instanceSSL
     */
    public $instanceSSL;

    /**
     * @example EE205C00-30E4-xxxx-xxxx-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSSL' => 'InstanceSSL',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSSL) {
            $res['InstanceSSL'] = null !== $this->instanceSSL ? $this->instanceSSL->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSSL'])) {
            $model->instanceSSL = instanceSSL::fromMap($map['InstanceSSL']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
