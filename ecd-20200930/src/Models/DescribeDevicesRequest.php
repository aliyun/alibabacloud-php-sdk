<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDevicesRequest extends Model
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
     * @description The type of the Alibaba Cloud Workspace client.
     *
     *   1: hardware client.
     *   2: software client.
     *
     * @example 2
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The ID of the device.
     *
     * @example 5F52817BE267A43C608D245070D2****
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
     * @description The ID of the convenience user to whom you want to bind the device.
     *
     * @example moli
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The number of the page to return.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the user account.
     *
     *   SIMPLE: convenience account.
     *   AD: AD account.
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
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'region'      => 'Region',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDevicesRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
