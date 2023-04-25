<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetDataChannelCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientId'    => 'ClientId',
        'deviceId'    => 'DeviceId',
        'endpoint'    => 'Endpoint',
        'expiredTime' => 'ExpiredTime',
        'password'    => 'Password',
        'topic'       => 'Topic',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
