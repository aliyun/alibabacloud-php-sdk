<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetAgentListRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $agentIp;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentOs;
    protected $_name = [
        'regionId'    => 'RegionId',
        'instanceId'  => 'InstanceId',
        'agentIp'     => 'AgentIp',
        'agentStatus' => 'AgentStatus',
        'agentOs'     => 'AgentOs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentIp) {
            $res['AgentIp'] = $this->agentIp;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->agentOs) {
            $res['AgentOs'] = $this->agentOs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentIp'])) {
            $model->agentIp = $map['AgentIp'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['AgentOs'])) {
            $model->agentOs = $map['AgentOs'];
        }

        return $model;
    }
}
