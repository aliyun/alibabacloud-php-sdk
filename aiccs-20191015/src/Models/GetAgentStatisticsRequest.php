<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetAgentStatisticsRequest extends Model
{
    /**
     * @description AICCS实例ID，在智能联络中心控制台上可以看到
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 开始日期时间戳（毫秒）
     *
     * @var int
     */
    public $startDate;

    /**
     * @description 结束日期时间戳（毫秒）
     *
     * @var int
     */
    public $endDate;

    /**
     * @description 每页大小（默认为10)
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 当前页（默认为1）
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 坐席id列表
     *
     * @var int[]
     */
    public $agentIds;

    /**
     * @description 部门id列表
     *
     * @var int[]
     */
    public $depIds;

    /**
     * @description 时间纬度类型
     *
     * @var string
     */
    public $timeLatitudeType;

    /**
     * @description 是否根据部门分组
     *
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @description 是否根据坐席分组
     *
     * @var bool
     */
    public $existAgentGrouping;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'startDate'               => 'StartDate',
        'endDate'                 => 'EndDate',
        'pageSize'                => 'PageSize',
        'currentPage'             => 'CurrentPage',
        'agentIds'                => 'AgentIds',
        'depIds'                  => 'DepIds',
        'timeLatitudeType'        => 'TimeLatitudeType',
        'existDepartmentGrouping' => 'ExistDepartmentGrouping',
        'existAgentGrouping'      => 'ExistAgentGrouping',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->depIds) {
            $res['DepIds'] = $this->depIds;
        }
        if (null !== $this->timeLatitudeType) {
            $res['TimeLatitudeType'] = $this->timeLatitudeType;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['ExistDepartmentGrouping'] = $this->existDepartmentGrouping;
        }
        if (null !== $this->existAgentGrouping) {
            $res['ExistAgentGrouping'] = $this->existAgentGrouping;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['AgentIds'])) {
            if (!empty($map['AgentIds'])) {
                $model->agentIds = $map['AgentIds'];
            }
        }
        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = $map['DepIds'];
            }
        }
        if (isset($map['TimeLatitudeType'])) {
            $model->timeLatitudeType = $map['TimeLatitudeType'];
        }
        if (isset($map['ExistDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['ExistDepartmentGrouping'];
        }
        if (isset($map['ExistAgentGrouping'])) {
            $model->existAgentGrouping = $map['ExistAgentGrouping'];
        }

        return $model;
    }
}
