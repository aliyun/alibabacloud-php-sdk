<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorTaskListRequest extends Model
{
    /**
     * @description The additional information of the instance.
     *
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The timestamp when the metric import task was created.
     *
     * Unit: milliseconds.
     * @example true
     *
     * @var bool
     */
    public $includeAliyunTask;

    /**
     * @description The conditions that are used to filter logs imported from Log Service.
     *
     * @example task
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The configuration file of the Alibaba Cloud service that you want to monitor by using Hybrid Cloud Monitoring.
     *
     *   namespace: the namespace of the Alibaba Cloud service.
     *   metric_list: the metrics of the Alibaba Cloud service.
     *
     * @example aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeHybridMonitorTaskList**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
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
     * @description The keyword that is used to search for metric import tasks.
     *
     * @example 120886317861****
     *
     * @var int
     */
    public $targetUserId;

    /**
     * @description The type of the metric import task. Valid values:
     *
     *   aliyun_fc: metric import tasks for Alibaba Cloud services
     *   aliyun_sls: metrics for logs imported from Log Service
     *
     * @example 36****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The interval at which the CloudMonitor agent collects host monitoring data. Valid values:
     *
     *   15
     *   30
     *   60
     *
     * Unit: seconds.
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
