<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListExcessiveDeviceRegistrationApplicationsResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deviceTag;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var bool
     */
    public $isUsed;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'createTime' => 'CreateTime',
        'department' => 'Department',
        'description' => 'Description',
        'deviceTag' => 'DeviceTag',
        'deviceType' => 'DeviceType',
        'hostname' => 'Hostname',
        'isUsed' => 'IsUsed',
        'mac' => 'Mac',
        'saseUserId' => 'SaseUserId',
        'status' => 'Status',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->isUsed) {
            $res['IsUsed'] = $this->isUsed;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['IsUsed'])) {
            $model->isUsed = $map['IsUsed'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
