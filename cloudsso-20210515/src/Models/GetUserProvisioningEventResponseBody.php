<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningEventResponseBody\userProvisioningEvent;

class GetUserProvisioningEventResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioningEvent
     */
    public $userProvisioningEvent;
    protected $_name = [
        'requestId' => 'RequestId',
        'userProvisioningEvent' => 'UserProvisioningEvent',
    ];

    public function validate()
    {
        if (null !== $this->userProvisioningEvent) {
            $this->userProvisioningEvent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userProvisioningEvent) {
            $res['UserProvisioningEvent'] = null !== $this->userProvisioningEvent ? $this->userProvisioningEvent->toArray($noStream) : $this->userProvisioningEvent;
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

        if (isset($map['UserProvisioningEvent'])) {
            $model->userProvisioningEvent = userProvisioningEvent::fromMap($map['UserProvisioningEvent']);
        }

        return $model;
    }
}
