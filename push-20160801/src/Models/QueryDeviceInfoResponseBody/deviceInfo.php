<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @example test@aliyun.com
     *
     * @var string
     */
    public $account;

    /**
     * @example test_alias,test_alias2
     *
     * @var string
     */
    public $alias;

    /**
     * @example a64ae296f3b04a58a05b30c95****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 5ecc7b4012aaa801b63******5543ccbda6b4930d09629e936e1ac4b762a7df
     *
     * @var string
     */
    public $deviceToken;

    /**
     * @example iOS
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 2018-03-27T02:19:40Z
     *
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @example 133********
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $pushEnabled;

    /**
     * @example test_tag,test_tag2
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'account'        => 'Account',
        'alias'          => 'Alias',
        'deviceId'       => 'DeviceId',
        'deviceToken'    => 'DeviceToken',
        'deviceType'     => 'DeviceType',
        'lastOnlineTime' => 'LastOnlineTime',
        'online'         => 'Online',
        'phoneNumber'    => 'PhoneNumber',
        'pushEnabled'    => 'PushEnabled',
        'tags'           => 'Tags',
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
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
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
