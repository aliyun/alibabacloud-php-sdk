<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetSkillGroupServiceStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $agentIds;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var bool
     */
    public $existAgentGrouping;

    /**
     * @var bool
     */
    public $existChannelInstanceGrouping;

    /**
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @var bool
     */
    public $existRobotInstanceGrouping;

    /**
     * @var bool
     */
    public $existSkillGroupGrouping;

    /**
     * @var int[]
     */
    public $groupIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $timeLatitudeType;
    protected $_name = [
        'agentIds' => 'AgentIds',
        'currentPage' => 'CurrentPage',
        'depIds' => 'DepIds',
        'endDate' => 'EndDate',
        'existAgentGrouping' => 'ExistAgentGrouping',
        'existChannelInstanceGrouping' => 'ExistChannelInstanceGrouping',
        'existDepartmentGrouping' => 'ExistDepartmentGrouping',
        'existRobotInstanceGrouping' => 'ExistRobotInstanceGrouping',
        'existSkillGroupGrouping' => 'ExistSkillGroupGrouping',
        'groupIds' => 'GroupIds',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'startDate' => 'StartDate',
        'timeLatitudeType' => 'TimeLatitudeType',
    ];

    public function validate()
    {
        if (\is_array($this->agentIds)) {
            Model::validateArray($this->agentIds);
        }
        if (\is_array($this->depIds)) {
            Model::validateArray($this->depIds);
        }
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIds) {
            if (\is_array($this->agentIds)) {
                $res['AgentIds'] = [];
                $n1 = 0;
                foreach ($this->agentIds as $item1) {
                    $res['AgentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->depIds) {
            if (\is_array($this->depIds)) {
                $res['DepIds'] = [];
                $n1 = 0;
                foreach ($this->depIds as $item1) {
                    $res['DepIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->existAgentGrouping) {
            $res['ExistAgentGrouping'] = $this->existAgentGrouping;
        }

        if (null !== $this->existChannelInstanceGrouping) {
            $res['ExistChannelInstanceGrouping'] = $this->existChannelInstanceGrouping;
        }

        if (null !== $this->existDepartmentGrouping) {
            $res['ExistDepartmentGrouping'] = $this->existDepartmentGrouping;
        }

        if (null !== $this->existRobotInstanceGrouping) {
            $res['ExistRobotInstanceGrouping'] = $this->existRobotInstanceGrouping;
        }

        if (null !== $this->existSkillGroupGrouping) {
            $res['ExistSkillGroupGrouping'] = $this->existSkillGroupGrouping;
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->timeLatitudeType) {
            $res['TimeLatitudeType'] = $this->timeLatitudeType;
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
            if (!empty($map['AgentIds'])) {
                $model->agentIds = [];
                $n1 = 0;
                foreach ($map['AgentIds'] as $item1) {
                    $model->agentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = [];
                $n1 = 0;
                foreach ($map['DepIds'] as $item1) {
                    $model->depIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExistAgentGrouping'])) {
            $model->existAgentGrouping = $map['ExistAgentGrouping'];
        }

        if (isset($map['ExistChannelInstanceGrouping'])) {
            $model->existChannelInstanceGrouping = $map['ExistChannelInstanceGrouping'];
        }

        if (isset($map['ExistDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['ExistDepartmentGrouping'];
        }

        if (isset($map['ExistRobotInstanceGrouping'])) {
            $model->existRobotInstanceGrouping = $map['ExistRobotInstanceGrouping'];
        }

        if (isset($map['ExistSkillGroupGrouping'])) {
            $model->existSkillGroupGrouping = $map['ExistSkillGroupGrouping'];
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TimeLatitudeType'])) {
            $model->timeLatitudeType = $map['TimeLatitudeType'];
        }

        return $model;
    }
}
