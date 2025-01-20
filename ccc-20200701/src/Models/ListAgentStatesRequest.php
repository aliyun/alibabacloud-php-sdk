<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListAgentStatesRequest extends Model
{
    /**
     * @var string
     */
    public $agentIds;
    /**
     * @var bool
     */
    public $excludeOfflineUsers;
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
    public $state;
    protected $_name = [
        'agentIds'            => 'AgentIds',
        'excludeOfflineUsers' => 'ExcludeOfflineUsers',
        'instanceId'          => 'InstanceId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'skillGroupId'        => 'SkillGroupId',
        'state'               => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }

        if (null !== $this->excludeOfflineUsers) {
            $res['ExcludeOfflineUsers'] = $this->excludeOfflineUsers;
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
        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }

        if (isset($map['ExcludeOfflineUsers'])) {
            $model->excludeOfflineUsers = $map['ExcludeOfflineUsers'];
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

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
