<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceOnlineInfoResponseBody;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var int
     */
    public $loginTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $online;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $iasId;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var string
     */
    public $terminal;

    /**
     * @var string
     */
    public $clientVersion;
    protected $_name = [
        'loginTime'     => 'LoginTime',
        'deviceId'      => 'DeviceId',
        'online'        => 'Online',
        'projectId'     => 'ProjectId',
        'iasId'         => 'IasId',
        'systemVersion' => 'SystemVersion',
        'terminal'      => 'Terminal',
        'clientVersion' => 'ClientVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->iasId) {
            $res['IasId'] = $this->iasId;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->terminal) {
            $res['Terminal'] = $this->terminal;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IasId'])) {
            $model->iasId = $map['IasId'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Terminal'])) {
            $model->terminal = $map['Terminal'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        return $model;
    }
}
