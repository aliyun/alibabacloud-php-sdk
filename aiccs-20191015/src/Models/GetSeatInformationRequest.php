<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetSeatInformationRequest extends Model
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
     * @var int[]
     */
    public $depIds;

    /**
     * @description 是否根据部门分组
     *
     * @var bool
     */
    public $existDepartmentGrouping;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'startDate'               => 'startDate',
        'endDate'                 => 'endDate',
        'pageSize'                => 'pageSize',
        'currentPage'             => 'currentPage',
        'depIds'                  => 'depIds',
        'existDepartmentGrouping' => 'existDepartmentGrouping',
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
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->depIds) {
            $res['depIds'] = $this->depIds;
        }
        if (null !== $this->existDepartmentGrouping) {
            $res['existDepartmentGrouping'] = $this->existDepartmentGrouping;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSeatInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['depIds'])) {
            if (!empty($map['depIds'])) {
                $model->depIds = $map['depIds'];
            }
        }
        if (isset($map['existDepartmentGrouping'])) {
            $model->existDepartmentGrouping = $map['existDepartmentGrouping'];
        }

        return $model;
    }
}
