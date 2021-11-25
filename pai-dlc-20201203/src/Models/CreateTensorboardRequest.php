<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateTensorboardRequest extends Model
{
    /**
     * @description 工作空间ID
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description DataSource Id
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var DataSourceItem[]
     */
    public $dataSources;

    /**
     * @description Tensorboard名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 任务Id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 最长运行时长
     *
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @description Summary 目录
     *
     * @var string
     */
    public $summaryPath;
    protected $_name = [
        'workspaceId'           => 'WorkspaceId',
        'dataSourceId'          => 'DataSourceId',
        'dataSources'           => 'DataSources',
        'displayName'           => 'DisplayName',
        'jobId'                 => 'JobId',
        'maxRunningTimeMinutes' => 'MaxRunningTimeMinutes',
        'summaryPath'           => 'SummaryPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSources) {
            $res['DataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['DataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->maxRunningTimeMinutes) {
            $res['MaxRunningTimeMinutes'] = $this->maxRunningTimeMinutes;
        }
        if (null !== $this->summaryPath) {
            $res['SummaryPath'] = $this->summaryPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTensorboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n                  = 0;
                foreach ($map['DataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? DataSourceItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MaxRunningTimeMinutes'])) {
            $model->maxRunningTimeMinutes = $map['MaxRunningTimeMinutes'];
        }
        if (isset($map['SummaryPath'])) {
            $model->summaryPath = $map['SummaryPath'];
        }

        return $model;
    }
}
