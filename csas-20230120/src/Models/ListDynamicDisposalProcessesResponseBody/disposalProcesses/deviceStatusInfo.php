<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;

use AlibabaCloud\Dara\Model;

class deviceStatusInfo extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $dlpStatus;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $laStatus;

    /**
     * @var string
     */
    public $loginStatus;

    /**
     * @var string
     */
    public $nacStatus;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workshop;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
