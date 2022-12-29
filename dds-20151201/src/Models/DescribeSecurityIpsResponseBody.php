<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsResponseBody\securityIpGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityIpsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example FC724D23-2962-479E-ABB1-606C935AE7FD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information of IP whitelists.
     *
     * @var securityIpGroups
     */
    public $securityIpGroups;

    /**
     * @description The IP addresses in the default whitelist.
     *
     * @example 47.xxx.xxx.xx,100.xxx.xxx.0/24
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityIpGroups) {
            $res['SecurityIpGroups'] = null !== $this->securityIpGroups ? $this->securityIpGroups->toMap() : null;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityIpsResponseBody
     */
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
