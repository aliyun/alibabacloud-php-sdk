<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody\agentDeviceList;

use AlibabaCloud\Tea\Model;

class agentDevice extends Model
{
    /**
     * @var int
     */
    public $loginTime;

    /**
     * @var string
     */
    public $clientPort;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $browserVersion;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isLogin;

    /**
     * @var int
     */
    public $ramId;
    protected $_name = [
        'loginTime'      => 'LoginTime',
        'clientPort'     => 'ClientPort',
        'remark'         => 'Remark',
        'browserVersion' => 'BrowserVersion',
        'clientIp'       => 'ClientIp',
        'instanceId'     => 'InstanceId',
        'isLogin'        => 'IsLogin',
        'ramId'          => 'RamId',
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
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->browserVersion) {
            $res['BrowserVersion'] = $this->browserVersion;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isLogin) {
            $res['IsLogin'] = $this->isLogin;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['BrowserVersion'])) {
            $model->browserVersion = $map['BrowserVersion'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsLogin'])) {
            $model->isLogin = $map['IsLogin'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        return $model;
    }
}
