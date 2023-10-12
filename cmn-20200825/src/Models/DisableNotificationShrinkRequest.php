<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DisableNotificationShrinkRequest extends Model
{
    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Temporarily Closed
     *
     * @var string
     */
    public $listShrink;

    /**
     * @example Temporarily Closed
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'expiryTime' => 'ExpiryTime',
        'instanceId' => 'InstanceId',
        'listShrink' => 'List',
        'reason'     => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listShrink) {
            $res['List'] = $this->listShrink;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableNotificationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['List'])) {
            $model->listShrink = $map['List'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
