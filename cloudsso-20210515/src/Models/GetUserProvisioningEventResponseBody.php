<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningEventResponseBody\userProvisioningEvent;
use AlibabaCloud\Tea\Model;

class GetUserProvisioningEventResponseBody extends Model
{
    /**
     * @example B801715C-97EA-3067-AC97-EF1EBECBB39C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userProvisioningEvent
     */
    public $userProvisioningEvent;
    protected $_name = [
        'requestId'             => 'RequestId',
        'userProvisioningEvent' => 'UserProvisioningEvent',
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
        if (null !== $this->userProvisioningEvent) {
            $res['UserProvisioningEvent'] = null !== $this->userProvisioningEvent ? $this->userProvisioningEvent->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserProvisioningEventResponseBody
     */
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
