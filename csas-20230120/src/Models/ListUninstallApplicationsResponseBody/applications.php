<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUninstallApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @example uninstall-app-6646831ac314****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 2023-07-17 18:46:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 36efa42d-2c32-c4dc-e3fc-8541e33a****
     *
     * @var string
     */
    public $devTag;

    /**
     * @example Windows
     *
     * @var string
     */
    public $devType;

    /**
     * @example win10-64bit
     *
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $idpName;

    /**
     * @example false
     *
     * @var bool
     */
    public $isUninstall;

    /**
     * @example 00:16:XX:XX:7c:46
     *
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @example Approved
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'createTime'    => 'CreateTime',
        'department'    => 'Department',
        'devTag'        => 'DevTag',
        'devType'       => 'DevType',
        'hostname'      => 'Hostname',
        'idpName'       => 'IdpName',
        'isUninstall'   => 'IsUninstall',
        'mac'           => 'Mac',
        'reason'        => 'Reason',
        'saseUserId'    => 'SaseUserId',
        'status'        => 'Status',
        'username'      => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }
        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->idpName) {
            $res['IdpName'] = $this->idpName;
        }
        if (null !== $this->isUninstall) {
            $res['IsUninstall'] = $this->isUninstall;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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

    /**
     * @param array $map
     *
     * @return applications
     */
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
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }
        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IdpName'])) {
            $model->idpName = $map['IdpName'];
        }
        if (isset($map['IsUninstall'])) {
            $model->isUninstall = $map['IsUninstall'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
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
