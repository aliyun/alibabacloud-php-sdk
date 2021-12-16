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
    public $instanceId;

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
    public $skillGroupId;

    /**
     * @var string
     */
    public $stateList;
    protected $_name = [
        'agentIdList'  => 'AgentIdList',
        'agentName'    => 'AgentName',
        'instanceId'   => 'InstanceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'skillGroupId' => 'SkillGroupId',
        'stateList'    => 'StateList',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->stateList) {
            $res['StateList'] = $this->stateList;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['StateList'])) {
            $model->stateList = $map['StateList'];
        }

        return $model;
    }
}
