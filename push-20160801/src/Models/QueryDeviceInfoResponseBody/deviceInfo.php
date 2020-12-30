<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $lastOnlineTime;

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
    public $deviceType;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'account'        => 'Account',
        'lastOnlineTime' => 'LastOnlineTime',
        'phoneNumber'    => 'PhoneNumber',
        'pushEnabled'    => 'PushEnabled',
        'deviceType'     => 'DeviceType',
        'deviceId'       => 'DeviceId',
        'online'         => 'Online',
        'tags'           => 'Tags',
        'deviceToken'    => 'DeviceToken',
        'alias'          => 'Alias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->pushEnabled) {
            $res['PushEnabled'] = $this->pushEnabled;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PushEnabled'])) {
            $model->pushEnabled = $map['PushEnabled'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
