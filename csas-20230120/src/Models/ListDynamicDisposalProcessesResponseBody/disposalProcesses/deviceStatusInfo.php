<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;

use AlibabaCloud\Tea\Model;

class deviceStatusInfo extends Model
{
    /**
     * @description Client version.
     *
     * @example 4.5.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description Department to which the user belongs.
     *
     * @example IT运维部
     *
     * @var string
     */
    public $department;

    /**
     * @description Office data protection status. Values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     * - **Unprovisioned**: Not configured.
     * - **Unauthorized**: Unauthorized.
     *
     * @example enabled
     *
     * @var string
     */
    public $dlpStatus;

    /**
     * @description Public IP address.
     *
     * @example 120.26.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Internet behavior management enablement status.
     *
     * @example enabled
     *
     * @var string
     */
    public $laStatus;

    /**
     * @description Login status.
     *
     * @example online
     *
     * @var string
     */
    public $loginStatus;

    /**
     * @description Network access control status. Values:
     * - **Enabled**: Enabled.
     * - **Disabled**: Disabled.
     * - **Unprovisioned**: Not configured.
     *
     * @example enabled
     *
     * @var string
     */
    public $nacStatus;

    /**
     * @description Private IP address.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description Unique ID of the SASE user.
     *
     * @example su_dfsdfsdgasgsgag
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @description Username.
     *
     * @example test
     *
     * @var string
     */
    public $username;

    /**
     * @description Identified office area name.
     *
     * @example office
     *
     * @var string
     */
    public $workshop;

    /**
     * @description ZTNA enablement status.
     *
     * @example enabled
     *
     * @var string
     */
    public $ztnaStatus;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'department' => 'Department',
        'dlpStatus' => 'DlpStatus',
        'internetIp' => 'InternetIp',
        'laStatus' => 'LaStatus',
        'loginStatus' => 'LoginStatus',
        'nacStatus' => 'NacStatus',
        'privateIp' => 'PrivateIp',
        'saseUserId' => 'SaseUserId',
        'username' => 'Username',
        'workshop' => 'Workshop',
        'ztnaStatus' => 'ZtnaStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->dlpStatus) {
            $res['DlpStatus'] = $this->dlpStatus;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->laStatus) {
            $res['LaStatus'] = $this->laStatus;
        }
        if (null !== $this->loginStatus) {
            $res['LoginStatus'] = $this->loginStatus;
        }
        if (null !== $this->nacStatus) {
            $res['NacStatus'] = $this->nacStatus;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workshop) {
            $res['Workshop'] = $this->workshop;
        }
        if (null !== $this->ztnaStatus) {
            $res['ZtnaStatus'] = $this->ztnaStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceStatusInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['DlpStatus'])) {
            $model->dlpStatus = $map['DlpStatus'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['LaStatus'])) {
            $model->laStatus = $map['LaStatus'];
        }
        if (isset($map['LoginStatus'])) {
            $model->loginStatus = $map['LoginStatus'];
        }
        if (isset($map['NacStatus'])) {
            $model->nacStatus = $map['NacStatus'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Workshop'])) {
            $model->workshop = $map['Workshop'];
        }
        if (isset($map['ZtnaStatus'])) {
            $model->ztnaStatus = $map['ZtnaStatus'];
        }

        return $model;
    }
}
