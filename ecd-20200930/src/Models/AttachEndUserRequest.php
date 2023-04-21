<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AttachEndUserRequest extends Model
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
     * @description The type of the Alibaba Cloud Workspace client that runs on the device.
     *
     *   1: the hardware client
     *   2: the software client
     *
     * @example 2
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The ID of the device.
     *
     * @example 111810122200F0C24CF7F1BF-*05AY****
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
     * @description The ID of the user.
     *
     * @example moli
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The account type of the user.
     *
     *   SIMPLE: the convenience user
     *   AD: the AD user
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'adDomain'    => 'AdDomain',
        'clientType'  => 'ClientType',
        'deviceId'    => 'DeviceId',
        'directoryId' => 'DirectoryId',
        'endUserId'   => 'EndUserId',
        'regionId'    => 'RegionId',
        'userType'    => 'UserType',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachEndUserRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
