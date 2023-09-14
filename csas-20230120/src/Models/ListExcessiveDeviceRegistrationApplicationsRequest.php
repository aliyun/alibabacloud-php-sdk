<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListExcessiveDeviceRegistrationApplicationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 36efa42d-2c32-c4dc-e3fc-8541e33a****
     *
     * @var string
     */
    public $deviceTag;

    /**
     * @example win10-64bit
     *
     * @var string
     */
    public $hostname;

    /**
     * @example 00:16:XX:XX:7c:46
     *
     * @var string
     */
    public $mac;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'currentPage'    => 'CurrentPage',
        'department'     => 'Department',
        'deviceTag'      => 'DeviceTag',
        'hostname'       => 'Hostname',
        'mac'            => 'Mac',
        'pageSize'       => 'PageSize',
        'saseUserId'     => 'SaseUserId',
        'statuses'       => 'Statuses',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExcessiveDeviceRegistrationApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
