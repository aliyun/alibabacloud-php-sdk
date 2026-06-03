<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class GetAgentListRequest extends Model
{
    /**
     * @var string
     */
    public $agentIp;

    /**
     * @var string
     */
    public $agentOs;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'agentIp' => 'AgentIp',
        'agentOs' => 'AgentOs',
        'agentStatus' => 'AgentStatus',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIp) {
            $res['AgentIp'] = $this->agentIp;
        }

        if (null !== $this->agentOs) {
            $res['AgentOs'] = $this->agentOs;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AgentIp'])) {
            $model->agentIp = $map['AgentIp'];
        }

        if (isset($map['AgentOs'])) {
            $model->agentOs = $map['AgentOs'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
