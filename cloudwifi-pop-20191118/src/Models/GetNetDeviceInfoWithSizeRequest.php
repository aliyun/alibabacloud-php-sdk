<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class GetNetDeviceInfoWithSizeRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $cursor;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $id;

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
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $requestId;

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
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'cursor' => 'Cursor',
        'hostName' => 'HostName',
        'id' => 'Id',
        'idc' => 'Idc',
        'logicNetPod' => 'LogicNetPod',
        'manufacturer' => 'Manufacturer',
        'mgnIp' => 'MgnIp',
        'model' => 'Model',
        'netPod' => 'NetPod',
        'pageSize' => 'PageSize',
        'password' => 'Password',
        'requestId' => 'RequestId',
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
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
