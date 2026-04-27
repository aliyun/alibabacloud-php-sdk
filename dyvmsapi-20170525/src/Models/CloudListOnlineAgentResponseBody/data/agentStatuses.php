<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentStatuses extends Model
{
    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $deviceStatus;

    /**
     * @var int
     */
    public $deviceStatusDuration;

    /**
     * @var int
     */
    public $loginStatus;

    /**
     * @var int
     */
    public $loginStatusDuration;

    /**
     * @var string
     */
    public $loginTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'bindTel' => 'BindTel',
        'cno' => 'Cno',
        'deviceStatus' => 'DeviceStatus',
        'deviceStatusDuration' => 'DeviceStatusDuration',
        'loginStatus' => 'LoginStatus',
        'loginStatusDuration' => 'LoginStatusDuration',
        'loginTime' => 'LoginTime',
        'name' => 'Name',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->deviceStatusDuration) {
            $res['DeviceStatusDuration'] = $this->deviceStatusDuration;
        }

        if (null !== $this->loginStatus) {
            $res['LoginStatus'] = $this->loginStatus;
        }

        if (null !== $this->loginStatusDuration) {
            $res['LoginStatusDuration'] = $this->loginStatusDuration;
        }

        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['DeviceStatusDuration'])) {
            $model->deviceStatusDuration = $map['DeviceStatusDuration'];
        }

        if (isset($map['LoginStatus'])) {
            $model->loginStatus = $map['LoginStatus'];
        }

        if (isset($map['LoginStatusDuration'])) {
            $model->loginStatusDuration = $map['LoginStatusDuration'];
        }

        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
