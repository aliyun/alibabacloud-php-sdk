<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputSecurityGroupResponseBody\securityGroup;

class GetMediaLiveInputSecurityGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroup
     */
    public $securityGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
        if (null !== $this->securityGroup) {
            $this->securityGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toArray($noStream) : $this->securityGroup;
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

        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = securityGroup::fromMap($map['SecurityGroup']);
        }

        return $model;
    }
}
