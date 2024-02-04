<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody\instanceSecurityConfigs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSecurityConfigsResponseBody extends Model
{
    /**
     * @description The return result of the request.
     *
     * @var instanceSecurityConfigs
     */
    public $instanceSecurityConfigs;

    /**
     * @description The ID of the request.
     *
     * @example EE205C00-30E4-****-****-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSecurityConfigs' => 'InstanceSecurityConfigs',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSecurityConfigs) {
            $res['InstanceSecurityConfigs'] = null !== $this->instanceSecurityConfigs ? $this->instanceSecurityConfigs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSecurityConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSecurityConfigs'])) {
            $model->instanceSecurityConfigs = instanceSecurityConfigs::fromMap($map['InstanceSecurityConfigs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
