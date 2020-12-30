<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStateLogsResponseBody\agentStateLogPage;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $connectId;

    /**
     * @var int
     */
    public $stateTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ramId;

    /**
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $counterParty;
    protected $_name = [
        'stateCode'     => 'StateCode',
        'contactId'     => 'ContactId',
        'state'         => 'State',
        'connectId'     => 'ConnectId',
        'stateTime'     => 'StateTime',
        'instanceId'    => 'InstanceId',
        'ramId'         => 'RamId',
        'skillGroupIds' => 'SkillGroupIds',
        'counterParty'  => 'CounterParty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->connectId) {
            $res['ConnectId'] = $this->connectId;
        }
        if (null !== $this->stateTime) {
            $res['StateTime'] = $this->stateTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->counterParty) {
            $res['CounterParty'] = $this->counterParty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ConnectId'])) {
            $model->connectId = $map['ConnectId'];
        }
        if (isset($map['StateTime'])) {
            $model->stateTime = $map['StateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['CounterParty'])) {
            $model->counterParty = $map['CounterParty'];
        }

        return $model;
    }
}
