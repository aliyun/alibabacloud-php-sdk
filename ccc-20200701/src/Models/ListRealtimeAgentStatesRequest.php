<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListRealtimeAgentStatesRequest extends Model
{
    /**
     * @example ["agent1@ccc-test", "agent2@ccc-test"]
     *
     * @var string
     */
    public $agentIdList;

    /**
     * @example agent
     *
     * @var string
     */
    public $agentName;

    /**
     * @example ["INBOUND", "OUTBOUND"]
     *
     * @var string
     */
    public $callTypeList;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example agent
     *
     * @var string
     */
    public $query;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example ["ACW", "Dialing"]
     *
     * @var string
     */
    public $stateList;

    /**
     * @example ["OFFICE_PHONE","ON_SITE"]
     *
     * @var string
     */
    public $workModeList;
    protected $_name = [
        'agentIdList'      => 'AgentIdList',
        'agentName'        => 'AgentName',
        'callTypeList'     => 'CallTypeList',
        'instanceId'       => 'InstanceId',
        'outboundScenario' => 'OutboundScenario',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'query'            => 'Query',
        'skillGroupId'     => 'SkillGroupId',
        'stateList'        => 'StateList',
        'workModeList'     => 'WorkModeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIdList) {
            $res['AgentIdList'] = $this->agentIdList;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->callTypeList) {
            $res['CallTypeList'] = $this->callTypeList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->stateList) {
            $res['StateList'] = $this->stateList;
        }
        if (null !== $this->workModeList) {
            $res['WorkModeList'] = $this->workModeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRealtimeAgentStatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentIdList'])) {
            $model->agentIdList = $map['AgentIdList'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['CallTypeList'])) {
            $model->callTypeList = $map['CallTypeList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['StateList'])) {
            $model->stateList = $map['StateList'];
        }
        if (isset($map['WorkModeList'])) {
            $model->workModeList = $map['WorkModeList'];
        }

        return $model;
    }
}
