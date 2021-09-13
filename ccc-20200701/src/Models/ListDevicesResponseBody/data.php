<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $expires;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'extension'  => 'Extension',
        'expires'    => 'Expires',
        'contact'    => 'Contact',
        'deviceId'   => 'DeviceId',
        'userId'     => 'UserId',
        'callId'     => 'CallId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
