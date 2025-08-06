<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences;

class DescribeSecurityGroupReferencesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroupReferences
     */
    public $securityGroupReferences;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityGroupReferences' => 'SecurityGroupReferences',
    ];

    public function validate()
    {
        if (null !== $this->securityGroupReferences) {
            $this->securityGroupReferences->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroupReferences) {
            $res['SecurityGroupReferences'] = null !== $this->securityGroupReferences ? $this->securityGroupReferences->toArray($noStream) : $this->securityGroupReferences;
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

        if (isset($map['SecurityGroupReferences'])) {
            $model->securityGroupReferences = securityGroupReferences::fromMap($map['SecurityGroupReferences']);
        }

        return $model;
    }
}
