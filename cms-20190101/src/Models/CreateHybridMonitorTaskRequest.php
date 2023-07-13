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
     * @description The error message.
     *
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
     * @description The tag value of the metric.
     *
     * @var string
     */
    public $description;

    /**
     * @description The conditions that are used to filter logs imported from Log Service.
     *
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The extended field that specifies the result of basic operations that are performed on aggregation results.
     *
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
     * @description The tag key of the metric.
     *
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @description The method that is used to filter logs imported from Log Service. Valid values:
     *
     *   `contain`: contains
     *   `notContain`: does not contain
     *   `>`: greater than
     *   `<`: less than
     *   `=`: equal to
     *   `! =`: not equal to
     *   `>=`: greater than or equal to
     *   `<=`: less than or equal to
     *
     * @example 120886317861****
     *
     * @var string
     */
    public $targetUserId;

    /**
     * @description The ID of the metric import task.
     *
     * @example 120886317861****
     *
     * @var string
     */
    public $targetUserIdList;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example aliyun_task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The operation that you want to perform. Set the value to **CreateHybridMonitorTask**.
     *
     * @example aliyun_fc
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The interval at which metrics are collected. Valid values:
     *
     *   15
     *   60 (default value)
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_sls`.
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
