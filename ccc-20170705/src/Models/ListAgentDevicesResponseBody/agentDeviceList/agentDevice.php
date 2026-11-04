<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody\agentDeviceList;

use AlibabaCloud\Dara\Model;

class agentDevice extends Model
{
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
    public $clientPort;

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
    public $loginTime;

    /**
     * @var int
     */
    public $ramId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'browserVersion' => 'BrowserVersion',
        'clientIp' => 'ClientIp',
        'clientPort' => 'ClientPort',
        'instanceId' => 'InstanceId',
        'isLogin' => 'IsLogin',
        'loginTime' => 'LoginTime',
        'ramId' => 'RamId',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserVersion) {
            $res['BrowserVersion'] = $this->browserVersion;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isLogin) {
            $res['IsLogin'] = $this->isLogin;
        }

        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }

        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['BrowserVersion'])) {
            $model->browserVersion = $map['BrowserVersion'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsLogin'])) {
            $model->isLogin = $map['IsLogin'];
        }

        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }

        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
