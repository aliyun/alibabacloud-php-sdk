<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetSkillGroupAgentStatusDetailsShrinkRequest extends Model
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
     * @description 部门id列表
     *
     * @var string
     */
    public $depIdsShrink;

    /**
     * @description 技能组id列表
     *
     * @var string
     */
    public $groupIdsShrink;

    /**
     * @description 是否根据部门分组
     *
     * @var bool
     */
    public $existDepartmentGrouping;

    /**
     * @description 是否根据技能组分组
     *
     * @var bool
     */
    public $existSkillGroupGrouping;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'startDate'               => 'StartDate',
        'endDate'                 => 'EndDate',
        'pageSize'                => 'PageSize',
        'currentPage'             => 'CurrentPage',
        'depIdsShrink'            => 'DepIds',
        'groupIdsShrink'          => 'GroupIds',
        'existDepartmentGrouping' => 'ExistDepartmentGrouping',
        'existSkillGroupGrouping' => 'ExistSkillGroupGrouping',
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
        if (null !== $this->depIdsShrink) {
            $res['DepIds'] = $this->depIdsShrink;
        }
        if (null !== $this->groupIdsShrink) {
            $res['GroupIds'] = $this->groupIdsShrink;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['ExistDepartmentGrouping'] = $this->existDepartmentGrouping;
        }
        if (null !== $this->existSkillGroupGrouping) {
            $res['ExistSkillGroupGrouping'] = $this->existSkillGroupGrouping;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSkillGroupAgentStatusDetailsShrinkRequest
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
        if (isset($map['DepIds'])) {
            $model->depIdsShrink = $map['DepIds'];
        }
        if (isset($map['GroupIds'])) {
            $model->groupIdsShrink = $map['GroupIds'];
        }
        if (isset($map['ExistDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['ExistDepartmentGrouping'];
        }
        if (isset($map['ExistSkillGroupGrouping'])) {
            $model->existSkillGroupGrouping = $map['ExistSkillGroupGrouping'];
        }

        return $model;
    }
}
