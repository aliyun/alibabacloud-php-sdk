<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetAgentDetailReportShrinkRequest extends Model
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
     * @var string
     */
    public $agentIdsShrink;

    /**
     * @description 部门id列表
     *
     * @var string
     */
    public $depIdsShrink;

    /**
     * @description 时间纬度类型
     *
     * @var string
     */
    public $timeLatitudeType;

    /**
     * @description 是否根据坐席分组显示
     *
     * @var bool
     */
    public $existAgentGrouping;

    /**
     * @description 是否根据部门分组显示
     *
     * @var bool
     */
    public $existDepartmentGrouping;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'startDate'               => 'StartDate',
        'endDate'                 => 'EndDate',
        'pageSize'                => 'PageSize',
        'currentPage'             => 'CurrentPage',
        'agentIdsShrink'          => 'AgentIds',
        'depIdsShrink'            => 'DepIds',
        'timeLatitudeType'        => 'TimeLatitudeType',
        'existAgentGrouping'      => 'ExistAgentGrouping',
        'existDepartmentGrouping' => 'ExistDepartmentGrouping',
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
        if (null !== $this->agentIdsShrink) {
            $res['AgentIds'] = $this->agentIdsShrink;
        }
        if (null !== $this->depIdsShrink) {
            $res['DepIds'] = $this->depIdsShrink;
        }
        if (null !== $this->timeLatitudeType) {
            $res['TimeLatitudeType'] = $this->timeLatitudeType;
        }
        if (null !== $this->existAgentGrouping) {
            $res['ExistAgentGrouping'] = $this->existAgentGrouping;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['ExistDepartmentGrouping'] = $this->existDepartmentGrouping;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentDetailReportShrinkRequest
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
            $model->agentIdsShrink = $map['AgentIds'];
        }
        if (isset($map['DepIds'])) {
            $model->depIdsShrink = $map['DepIds'];
        }
        if (isset($map['TimeLatitudeType'])) {
            $model->timeLatitudeType = $map['TimeLatitudeType'];
        }
        if (isset($map['ExistAgentGrouping'])) {
            $model->existAgentGrouping = $map['ExistAgentGrouping'];
        }
        if (isset($map['ExistDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['ExistDepartmentGrouping'];
        }

        return $model;
    }
}
