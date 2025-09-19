<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Dara\Model;

class ViewInstanceRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $terminalSessionToken;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'terminalSessionToken' => 'TerminalSessionToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
