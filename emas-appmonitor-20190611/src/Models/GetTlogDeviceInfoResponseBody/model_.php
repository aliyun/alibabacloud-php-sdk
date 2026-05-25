<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetTlogDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $appBuild;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var int
     */
    public $clientTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $geo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imsi;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var int
     */
    public $serverTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'appBuild' => 'AppBuild',
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appVersion' => 'AppVersion',
        'brand' => 'Brand',
        'clientTime' => 'ClientTime',
        'deviceId' => 'DeviceId',
        'deviceModel' => 'DeviceModel',
        'geo' => 'Geo',
        'id' => 'Id',
        'imsi' => 'Imsi',
        'ip' => 'Ip',
        'os' => 'Os',
        'osVersion' => 'OsVersion',
        'serverTime' => 'ServerTime',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appBuild) {
            $res['AppBuild'] = $this->appBuild;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->clientTime) {
            $res['ClientTime'] = $this->clientTime;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        if (null !== $this->geo) {
            $res['Geo'] = $this->geo;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        if (null !== $this->serverTime) {
            $res['ServerTime'] = $this->serverTime;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AppBuild'])) {
            $model->appBuild = $map['AppBuild'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['ClientTime'])) {
            $model->clientTime = $map['ClientTime'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        if (isset($map['Geo'])) {
            $model->geo = $map['Geo'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        if (isset($map['ServerTime'])) {
            $model->serverTime = $map['ServerTime'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
