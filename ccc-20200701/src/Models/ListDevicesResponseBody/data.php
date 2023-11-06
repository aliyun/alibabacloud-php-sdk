<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example d7b818c3-8d3a-732f-bc9e-1782wa16****
     *
     * @var string
     */
    public $callId;

    /**
     * @example sip:8032****@33.89.XX.XX:64189;transport=tcp;registering_acc=18_134_23_4
     *
     * @var string
     */
    public $contact;

    /**
     * @example ACC-YUNBS-1.0.10-****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @example 1609118499750
     *
     * @var int
     */
    public $expires;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $extension;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'callId'     => 'CallId',
        'contact'    => 'Contact',
        'deviceId'   => 'DeviceId',
        'deviceType' => 'DeviceType',
        'expires'    => 'Expires',
        'extension'  => 'Extension',
        'instanceId' => 'InstanceId',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
