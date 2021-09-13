<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListRealtimeAgentStatesRequest extends Model
{
    /**
     * @var string
     */
    public $skillGroupId;

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
    public $instanceId;

    /**
     * @var string
     */
    public $agentIdList;

    /**
     * @var string
     */
    public $stateList;

    /**
     * @var string
     */
    public $agentName;
    protected $_name = [
        'skillGroupId' => 'SkillGroupId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'instanceId'   => 'InstanceId',
        'agentIdList'  => 'AgentIdList',
        'stateList'    => 'StateList',
        'agentName'    => 'AgentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->agentIdList) {
            $res['AgentIdList'] = $this->agentIdList;
        }
        if (null !== $this->stateList) {
            $res['StateList'] = $this->stateList;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
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
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AgentIdList'])) {
            $model->agentIdList = $map['AgentIdList'];
        }
        if (isset($map['StateList'])) {
            $model->stateList = $map['StateList'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        return $model;
    }
}
