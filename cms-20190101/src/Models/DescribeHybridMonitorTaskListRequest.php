<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorTaskListRequest extends Model
{
    /**
     * @description The ID of the application group.
     *
     * For information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether the returned result includes metric import tasks for Alibaba Cloud services. Valid values:
     *
     *   true (default): The returned result includes metric import tasks for Alibaba Cloud services.
     *   false: The returned result excludes metric import tasks for Alibaba Cloud services.
     *
     * @example true
     *
     * @var bool
     */
    public $includeAliyunTask;

    /**
     * @description The keyword that is used for the search.
     *
     * @example task
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The name of the namespace.
     *
     * For information about how to obtain the name of a namespace, see [DescribeHybridMonitorNamespaceList](~~428880~~).
     * @example aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Pages start from page 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the member account.
     *
     * > This parameter is required only if you use a management account to call this operation to delete the metric import tasks that belong to a member in a resource directory. In this case, the `TaskType` parameter is set to `aliyun_fc`.
     * @example 120886317861****
     *
     * @var int
     */
    public $targetUserId;

    /**
     * @description The ID of the metric import task.
     *
     * @example 36****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the metric import task. Valid values:
     *
     *   aliyun_fc: metric import tasks for Alibaba Cloud services
     *   aliyun_sls: metrics for logs imported from Log Service
     *
     * @example aliyun_fc
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'groupId'           => 'GroupId',
        'includeAliyunTask' => 'IncludeAliyunTask',
        'keyword'           => 'Keyword',
        'namespace'         => 'Namespace',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
        'targetUserId'      => 'TargetUserId',
        'taskId'            => 'TaskId',
        'taskType'          => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->includeAliyunTask) {
            $res['IncludeAliyunTask'] = $this->includeAliyunTask;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorTaskListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IncludeAliyunTask'])) {
            $model->includeAliyunTask = $map['IncludeAliyunTask'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
