<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeSecurityGroupsResponseBody\securityGroupIds;

class DescribeSecurityGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate()
    {
        if (null !== $this->securityGroupIds) {
            $this->securityGroupIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toArray($noStream) : $this->securityGroupIds;
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

        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }

        return $model;
    }
}
