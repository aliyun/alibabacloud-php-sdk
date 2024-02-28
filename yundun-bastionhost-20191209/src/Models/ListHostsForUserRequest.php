<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostsForUserRequest extends Model
{
    /**
     * @description The endpoint of the host that you want to query. You can set this parameter to a domain name or an IP address. Only exact match is supported.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The name of the host that you want to query. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the bastion host on which you want to query the hosts that the user is authorized or not authorized to manage.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies the category of the hosts that you want to query. Valid values:
     *
     *   **Authorized**: queries the hosts that the user is authorized to manage. This is the default value.
     *   **Unauthorized**: queries the hosts that the user is not authorized to manage.
     *
     * @example Authorized
     *
     * @var string
     */
    public $mode;

    /**
     * @description The operating system of the host that you want to query. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The number of the page. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host on which you want to query the hosts that the user is authorized or not authorized to manage.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the user.
     *
     * > You can call the [ListUsers](~~204522~~) operation to query the ID of the user.
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'hostAddress' => 'HostAddress',
        'hostName'    => 'HostName',
        'instanceId'  => 'InstanceId',
        'mode'        => 'Mode',
        'OSType'      => 'OSType',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostsForUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
