<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups;

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
    protected $_name = [
        'requestId' => 'RequestId',
        'securityIpGroups' => 'SecurityIpGroups',
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

        return $model;
    }
}
