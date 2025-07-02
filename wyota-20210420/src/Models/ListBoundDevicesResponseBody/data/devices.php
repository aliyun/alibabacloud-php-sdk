<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListBoundDevicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var int
     */
    public $deviceMqttConnectionStatus;

    /**
     * @var string
     */
    public $deviceOs;

    /**
     * @var string
     */
    public $devicePlatform;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $lastLoginUser;

    /**
     * @var string
     */
    public $loginUser;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @var string
     */
    public $passwordFreeLoginUserNickName;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias' => 'Alias',
        'boundTime' => 'BoundTime',
        'buildId' => 'BuildId',
        'clientType' => 'ClientType',
        'connectionStatus' => 'ConnectionStatus',
        'deviceMqttConnectionStatus' => 'DeviceMqttConnectionStatus',
        'deviceOs' => 'DeviceOs',
        'devicePlatform' => 'DevicePlatform',
        'inManage' => 'InManage',
        'lastLoginTime' => 'LastLoginTime',
        'lastLoginUser' => 'LastLoginUser',
        'loginUser' => 'LoginUser',
        'model' => 'Model',
        'passwordFreeLoginUser' => 'PasswordFreeLoginUser',
        'passwordFreeLoginUserNickName' => 'PasswordFreeLoginUserNickName',
        'privateIp' => 'PrivateIp',
        'productName' => 'ProductName',
        'publicIp' => 'PublicIp',
        'serialNo' => 'SerialNo',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->deviceMqttConnectionStatus) {
            $res['DeviceMqttConnectionStatus'] = $this->deviceMqttConnectionStatus;
        }

        if (null !== $this->deviceOs) {
            $res['DeviceOs'] = $this->deviceOs;
        }

        if (null !== $this->devicePlatform) {
            $res['DevicePlatform'] = $this->devicePlatform;
        }

        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }

        if (null !== $this->lastLoginUser) {
            $res['LastLoginUser'] = $this->lastLoginUser;
        }

        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->passwordFreeLoginUser) {
            $res['PasswordFreeLoginUser'] = $this->passwordFreeLoginUser;
        }

        if (null !== $this->passwordFreeLoginUserNickName) {
            $res['PasswordFreeLoginUserNickName'] = $this->passwordFreeLoginUserNickName;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['DeviceMqttConnectionStatus'])) {
            $model->deviceMqttConnectionStatus = $map['DeviceMqttConnectionStatus'];
        }

        if (isset($map['DeviceOs'])) {
            $model->deviceOs = $map['DeviceOs'];
        }

        if (isset($map['DevicePlatform'])) {
            $model->devicePlatform = $map['DevicePlatform'];
        }

        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }

        if (isset($map['LastLoginUser'])) {
            $model->lastLoginUser = $map['LastLoginUser'];
        }

        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['PasswordFreeLoginUser'])) {
            $model->passwordFreeLoginUser = $map['PasswordFreeLoginUser'];
        }

        if (isset($map['PasswordFreeLoginUserNickName'])) {
            $model->passwordFreeLoginUserNickName = $map['PasswordFreeLoginUserNickName'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
