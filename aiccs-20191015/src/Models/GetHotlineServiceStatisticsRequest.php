<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetHotlineServiceStatisticsRequest extends Model
{
    /**
     * @var int[]
     */
    public $agentIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @example 1617761765000
     *
     * @var int
     */
    public $endDate;

    /**
     * @example true
     *
     * @var bool
     */
    public $existAgentGrouping;

    /**
     * @example true
     *
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @example true
     *
     * @var bool
     */
    public $existSkillGroupGrouping;

    /**
     * @var int[]
     */
    public $groupIds;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1615083365000
     *
     * @var int
     */
    public $startDate;

    /**
     * @example minute
     *
     * @var string
     */
    public $timeLatitudeType;
    protected $_name = [
        'agentIds'                => 'AgentIds',
        'currentPage'             => 'CurrentPage',
        'depIds'                  => 'DepIds',
        'endDate'                 => 'EndDate',
        'existAgentGrouping'      => 'ExistAgentGrouping',
        'existDepartmentGrouping' => 'ExistDepartmentGrouping',
        'existSkillGroupGrouping' => 'ExistSkillGroupGrouping',
        'groupIds'                => 'GroupIds',
        'instanceId'              => 'InstanceId',
        'pageSize'                => 'PageSize',
        'startDate'               => 'StartDate',
        'timeLatitudeType'        => 'TimeLatitudeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->depIds) {
            $res['DepIds'] = $this->depIds;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->existAgentGrouping) {
            $res['ExistAgentGrouping'] = $this->existAgentGrouping;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['ExistDepartmentGrouping'] = $this->existDepartmentGrouping;
        }
        if (null !== $this->existSkillGroupGrouping) {
            $res['ExistSkillGroupGrouping'] = $this->existSkillGroupGrouping;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
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

    /**
     * @param array $map
     *
     * @return GetHotlineServiceStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentIds'])) {
            if (!empty($map['AgentIds'])) {
                $model->agentIds = $map['AgentIds'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = $map['DepIds'];
            }
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExistAgentGrouping'])) {
            $model->existAgentGrouping = $map['ExistAgentGrouping'];
        }
        if (isset($map['ExistDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['ExistDepartmentGrouping'];
        }
        if (isset($map['ExistSkillGroupGrouping'])) {
            $model->existSkillGroupGrouping = $map['ExistSkillGroupGrouping'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
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
