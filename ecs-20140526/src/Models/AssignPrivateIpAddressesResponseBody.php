<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;

class AssignPrivateIpAddressesResponseBody extends Model
{
    /**
     * @var assignedPrivateIpAddressesSet
     */
    public $assignedPrivateIpAddressesSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assignedPrivateIpAddressesSet' => 'AssignedPrivateIpAddressesSet',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assignedPrivateIpAddressesSet) {
            $this->assignedPrivateIpAddressesSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedPrivateIpAddressesSet) {
            $res['AssignedPrivateIpAddressesSet'] = null !== $this->assignedPrivateIpAddressesSet ? $this->assignedPrivateIpAddressesSet->toArray($noStream) : $this->assignedPrivateIpAddressesSet;
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
        if (isset($map['AssignedPrivateIpAddressesSet'])) {
            $model->assignedPrivateIpAddressesSet = assignedPrivateIpAddressesSet::fromMap($map['AssignedPrivateIpAddressesSet']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
