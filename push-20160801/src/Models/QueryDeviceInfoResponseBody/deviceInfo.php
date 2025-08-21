<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var bool
     */
    public $pushEnabled;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'account' => 'Account',
        'alias' => 'Alias',
        'brand' => 'Brand',
        'deviceId' => 'DeviceId',
        'deviceToken' => 'DeviceToken',
        'deviceType' => 'DeviceType',
        'lastOnlineTime' => 'LastOnlineTime',
        'model' => 'Model',
        'online' => 'Online',
        'phoneNumber' => 'PhoneNumber',
        'pushEnabled' => 'PushEnabled',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->pushEnabled) {
            $res['PushEnabled'] = $this->pushEnabled;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['PushEnabled'])) {
            $model->pushEnabled = $map['PushEnabled'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
