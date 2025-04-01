<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody\instanceSecurityConfigs;

class DescribeInstanceSecurityConfigsResponseBody extends Model
{
    /**
     * @var instanceSecurityConfigs
     */
    public $instanceSecurityConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSecurityConfigs' => 'InstanceSecurityConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceSecurityConfigs) {
            $this->instanceSecurityConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSecurityConfigs) {
            $res['InstanceSecurityConfigs'] = null !== $this->instanceSecurityConfigs ? $this->instanceSecurityConfigs->toArray($noStream) : $this->instanceSecurityConfigs;
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
        if (isset($map['InstanceSecurityConfigs'])) {
            $model->instanceSecurityConfigs = instanceSecurityConfigs::fromMap($map['InstanceSecurityConfigs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
