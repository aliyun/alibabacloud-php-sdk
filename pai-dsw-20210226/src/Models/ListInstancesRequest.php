<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description 是否在工作空间内查询
     *
     * @var bool
     */
    public $inWorkspace;

    /**
     * @description 实例名称关键字
     *
     * @var string
     */
    public $instanceNameContains;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $instanceStatusEquals;

    /**
     * @description 当前页
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description 每页返回的实例数
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description 排序字段
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description 升序降序
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description 工作空间Id
     *
     * @var string
     */
    public $workspaceIdEquals;
    protected $_name = [
        'inWorkspace'          => 'InWorkspace',
        'instanceNameContains' => 'InstanceNameContains',
        'instanceStatusEquals' => 'InstanceStatusEquals',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'sortBy'               => 'SortBy',
        'sortOrder'            => 'SortOrder',
        'workspaceIdEquals'    => 'WorkspaceIdEquals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inWorkspace) {
            $res['InWorkspace'] = $this->inWorkspace;
        }
        if (null !== $this->instanceNameContains) {
            $res['InstanceNameContains'] = $this->instanceNameContains;
        }
        if (null !== $this->instanceStatusEquals) {
            $res['InstanceStatusEquals'] = $this->instanceStatusEquals;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->workspaceIdEquals) {
            $res['WorkspaceIdEquals'] = $this->workspaceIdEquals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InWorkspace'])) {
            $model->inWorkspace = $map['InWorkspace'];
        }
        if (isset($map['InstanceNameContains'])) {
            $model->instanceNameContains = $map['InstanceNameContains'];
        }
        if (isset($map['InstanceStatusEquals'])) {
            $model->instanceStatusEquals = $map['InstanceStatusEquals'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['WorkspaceIdEquals'])) {
            $model->workspaceIdEquals = $map['WorkspaceIdEquals'];
        }

        return $model;
    }
}
