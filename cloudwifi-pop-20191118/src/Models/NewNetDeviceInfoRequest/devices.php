<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewNetDeviceInfoRequest;

use AlibabaCloud\Dara\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $idc;

    /**
     * @var string
     */
    public $logicNetPod;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $mgnIp;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $netPod;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $serviceTag;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'hostName' => 'HostName',
        'idc' => 'Idc',
        'logicNetPod' => 'LogicNetPod',
        'manufacturer' => 'Manufacturer',
        'mgnIp' => 'MgnIp',
        'model' => 'Model',
        'netPod' => 'NetPod',
        'password' => 'Password',
        'role' => 'Role',
        'serviceTag' => 'ServiceTag',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }

        if (null !== $this->logicNetPod) {
            $res['LogicNetPod'] = $this->logicNetPod;
        }

        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }

        if (null !== $this->mgnIp) {
            $res['MgnIp'] = $this->mgnIp;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->netPod) {
            $res['NetPod'] = $this->netPod;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
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
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }

        if (isset($map['LogicNetPod'])) {
            $model->logicNetPod = $map['LogicNetPod'];
        }

        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }

        if (isset($map['MgnIp'])) {
            $model->mgnIp = $map['MgnIp'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NetPod'])) {
            $model->netPod = $map['NetPod'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
