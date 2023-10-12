<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateRealtimeTaskRequest extends Model
{
    /**
     * @description 检查策略，是否进行已有设备ID和巡检项的检查。
     * - CURRENT：不忽略，如果有运行中则返回运行中。
     * @example CURRENT
     *
     * @var string
     */
    public $checkDuplicatePolicy;

    /**
     * @description 幂等校验 token。
     *
     * @example 2dbeba0-555c-1a3f-8e11-3a235e4412
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example DEVICE-sd-389-sd
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description 实例ID。
     *
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 巡检项名字。
     *
     * @example test
     *
     * @var string
     */
    public $itemName;

    /**
     * @example import json
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'checkDuplicatePolicy' => 'CheckDuplicatePolicy',
        'clientToken'          => 'ClientToken',
        'deviceId'             => 'DeviceId',
        'instanceId'           => 'InstanceId',
        'itemName'             => 'ItemName',
        'script'               => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDuplicatePolicy) {
            $res['CheckDuplicatePolicy'] = $this->checkDuplicatePolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRealtimeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDuplicatePolicy'])) {
            $model->checkDuplicatePolicy = $map['CheckDuplicatePolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
