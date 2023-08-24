<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups;
use AlibabaCloud\Tea\Model;

class DescribeSecurityIpsResponseBody extends Model
{
    /**
     * @description The name of the whitelist.
     *
     * @example EFC9161F-15E3-4A6E-8A99-C09916D1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request.
     *
     * @var securityIpGroups
     */
    public $securityIpGroups;
    protected $_name = [
        'requestId'        => 'RequestId',
        'securityIpGroups' => 'SecurityIpGroups',
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

        return $model;
    }
}
