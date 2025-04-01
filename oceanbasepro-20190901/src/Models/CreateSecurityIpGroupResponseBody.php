<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateSecurityIpGroupResponseBody\securityIpGroup;

class CreateSecurityIpGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityIpGroup
     */
    public $securityIpGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityIpGroup' => 'SecurityIpGroup',
    ];

    public function validate()
    {
        if (null !== $this->securityIpGroup) {
            $this->securityIpGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIpGroup) {
            $res['SecurityIpGroup'] = null !== $this->securityIpGroup ? $this->securityIpGroup->toArray($noStream) : $this->securityIpGroup;
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

        if (isset($map['SecurityIpGroup'])) {
            $model->securityIpGroup = securityIpGroup::fromMap($map['SecurityIpGroup']);
        }

        return $model;
    }
}
