<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsResponseBody\securityIpGroups;

class DescribeSecurityIpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var securityIpGroups
     */
    public $securityIpGroups;
    /**
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'requestId'        => 'RequestId',
        'securityIpGroups' => 'SecurityIpGroups',
        'securityIps'      => 'SecurityIps',
    ];

    public function validate()
    {
        if (null !== $this->securityIpGroups) {
            $this->securityIpGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIpGroups) {
            $res['SecurityIpGroups'] = null !== $this->securityIpGroups ? $this->securityIpGroups->toArray($noStream) : $this->securityIpGroups;
        }

        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityIpGroups'])) {
            $model->securityIpGroups = securityIpGroups::fromMap($map['SecurityIpGroups']);
        }

        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
