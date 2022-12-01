<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListRealtimeAgentStatesRequest extends Model
{
    /**
     * @var string
     */
    public $agentIdList;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $callTypeList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $stateList;

    /**
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
