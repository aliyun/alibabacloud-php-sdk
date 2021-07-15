<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryHotlineNumberRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 当前页码
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 每页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 号码（支持模糊查询）
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @description 部门id（技能组分组）
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 技能组列表
     *
     * @var int[]
     */
    public $groupIds;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
        'hotlineNumber' => 'HotlineNumber',
        'departmentId'  => 'DepartmentId',
        'groupIds'      => 'GroupIds',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryHotlineNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }

        return $model;
    }
}
