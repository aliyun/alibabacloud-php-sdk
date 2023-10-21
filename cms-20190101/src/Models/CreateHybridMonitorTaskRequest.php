<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;
use AlibabaCloud\Tea\Model;

class CreateHybridMonitorTaskRequest extends Model
{
    /**
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @description The interval at which metrics are collected. Valid values:
     *
     *   15
     *   60 (default value)
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_sls`.
     * @example 60
     *
     * @var string
     */
    public $collectInterval;

    /**
     * @description The type of the collection target.
     *
     *   If the `TaskType` parameter is set to `aliyun_fc`, enter `aliyun_fc`.
     *   If the `TaskType` parameter is set to `aliyun_sls`, enter the name of the Logstore group.
     *
     * @example aliyun_fc
     *
     * @var string
     */
    public $collectTargetType;

    /**
     * @description The description of the metric import task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application group.
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_sls`.
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

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
     * @var string
     */
    public $regionId;

    /**
     * @description The configurations of the logs that are imported from Log Service.
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_sls`.
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @description The ID of the member account.
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_fc`.
     * @example 120886317861****
     *
     * @var string
     */
    public $targetUserId;

    /**
     * @description The IDs of the member accounts. Separate multiple member account IDs with commas (,).
     *
     * >  This parameter is required only if you call this operation by using the management account.
     * @example 120886317861****
     *
     * @var string
     */
    public $targetUserIdList;

    /**
     * @description The name of the metric import task.
     *
     *   If the `TaskType` parameter is set to `aliyun_fc`, enter the name of the metric import task.
     *   If the `TaskType` parameter is set to `aliyun_sls`, enter the name of the metric for logs imported from Log Service.
     *
     * @example aliyun_task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description Specifies whether to create a metric import task for an Alibaba Cloud service or create a metric for logs imported from Log Service. Valid values:
     *
     *   aliyun_fc: creates a metric import task for an Alibaba Cloud service
     *   aliyun_sls: creates a metric for logs imported from Log Service
     *
     * @example aliyun_fc
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The configuration file of the Alibaba Cloud service that you want to monitor by using Hybrid Cloud Monitoring.
     *
     *   namespace: the namespace of the Alibaba Cloud service. For information about how to query the namespace of an Alibaba Cloud service, see [DescribeMetricMetaList](~~98846~~).
     *   metric_list: the metrics of the Alibaba Cloud service. For information about how to query the metrics of an Alibaba Cloud service, see [DescribeMetricMetaList](~~98846~~).
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_fc`.
     * @example products:- namespace: acs_ecs_dashboard  metric_info:  - metric_list:    - cpu_total
     *
     * @var string
     */
    public $YARMConfig;
    protected $_name = [
        'attachLabels'      => 'AttachLabels',
        'collectInterval'   => 'CollectInterval',
        'collectTargetType' => 'CollectTargetType',
        'description'       => 'Description',
        'groupId'           => 'GroupId',
        'namespace'         => 'Namespace',
        'regionId'          => 'RegionId',
        'SLSProcessConfig'  => 'SLSProcessConfig',
        'targetUserId'      => 'TargetUserId',
        'targetUserIdList'  => 'TargetUserIdList',
        'taskName'          => 'TaskName',
        'taskType'          => 'TaskType',
        'YARMConfig'        => 'YARMConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachLabels) {
            $res['AttachLabels'] = [];
            if (null !== $this->attachLabels && \is_array($this->attachLabels)) {
                $n = 0;
                foreach ($this->attachLabels as $item) {
                    $res['AttachLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->collectInterval) {
            $res['CollectInterval'] = $this->collectInterval;
        }
        if (null !== $this->collectTargetType) {
            $res['CollectTargetType'] = $this->collectTargetType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->SLSProcessConfig) {
            $res['SLSProcessConfig'] = null !== $this->SLSProcessConfig ? $this->SLSProcessConfig->toMap() : null;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->targetUserIdList) {
            $res['TargetUserIdList'] = $this->targetUserIdList;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->YARMConfig) {
            $res['YARMConfig'] = $this->YARMConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridMonitorTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n                   = 0;
                foreach ($map['AttachLabels'] as $item) {
                    $model->attachLabels[$n++] = null !== $item ? attachLabels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CollectInterval'])) {
            $model->collectInterval = $map['CollectInterval'];
        }
        if (isset($map['CollectTargetType'])) {
            $model->collectTargetType = $map['CollectTargetType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SLSProcessConfig'])) {
            $model->SLSProcessConfig = SLSProcessConfig::fromMap($map['SLSProcessConfig']);
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['TargetUserIdList'])) {
            $model->targetUserIdList = $map['TargetUserIdList'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['YARMConfig'])) {
            $model->YARMConfig = $map['YARMConfig'];
        }

        return $model;
    }
}
