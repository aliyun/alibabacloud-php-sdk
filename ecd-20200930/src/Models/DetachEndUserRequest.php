<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetachEndUserRequest extends Model
{
    /**
     * @description The address of the Active Directory (AD) workspace.
     *
     * @example xn--0zw****
     *
     * @var string
     */
    public $adDomain;

    /**
     * @description The type of the Alibaba Cloud Workspace client. 1: the hardware client 2: the software client
     *
     * @example 2
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The ID of the device.
     *
     * @example F9E52EDCCB2B****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-jedbpr4sl9l37****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the user that is bound to the client.
     *
     * @example moli
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'adDomain'    => 'AdDomain',
        'clientType'  => 'ClientType',
        'deviceId'    => 'DeviceId',
        'directoryId' => 'DirectoryId',
        'endUserId'   => 'EndUserId',
        'region'      => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachEndUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
