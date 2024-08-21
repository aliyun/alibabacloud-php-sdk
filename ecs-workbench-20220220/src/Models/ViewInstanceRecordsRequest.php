<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Tea\Model;

class ViewInstanceRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example i-123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example abc
     *
     * @var string
     */
    public $terminalSessionToken;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'regionId'             => 'RegionId',
        'terminalSessionToken' => 'TerminalSessionToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->terminalSessionToken) {
            $res['TerminalSessionToken'] = $this->terminalSessionToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ViewInstanceRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TerminalSessionToken'])) {
            $model->terminalSessionToken = $map['TerminalSessionToken'];
        }

        return $model;
    }
}
