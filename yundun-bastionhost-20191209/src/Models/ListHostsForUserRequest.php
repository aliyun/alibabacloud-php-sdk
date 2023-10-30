<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostsForUserRequest extends Model
{
    /**
     * @description The operating system of the host that you want to query. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The ID of the Bastionhost instance where you want to query the hosts that the user is authorized or not authorized to manage.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example abc
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The category of the host that you want to query. Valid values:
     *
     *   **Authorized**: Query the hosts that the user is authorized to manage. This is the default value.
     *   **Unauthorized**: Query the hosts that the user is not authorized to manage.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operating system of the host. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Authorized
     *
     * @var string
     */
    public $mode;

    /**
     * @description The internal endpoint of the host. The value is a domain name or an IP address.
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The endpoint type of the host. Valid values:
     *
     *   **Public**: a public endpoint
     *   **Private**: an internal endpoint
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * >  We recommend that you do not leave the PageSize parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The endpoint of the host that you want to query. You can set this parameter to a domain name or an IP address. Only exact match is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
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
