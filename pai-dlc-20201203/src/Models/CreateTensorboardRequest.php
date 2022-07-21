<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateTensorboardRequest extends Model
{
    /**
     * @description DataSource Id
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceType;

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
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @description Summary 目录
     *
     * @var string
     */
    public $summaryPath;

    /**
     * @var string
     */
    public $summaryRelativePath;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dataSourceId'          => 'DataSourceId',
        'dataSourceType'        => 'DataSourceType',
        'dataSources'           => 'DataSources',
        'displayName'           => 'DisplayName',
        'jobId'                 => 'JobId',
        'maxRunningTimeMinutes' => 'MaxRunningTimeMinutes',
        'options'               => 'Options',
        'sourceId'              => 'SourceId',
        'sourceType'            => 'SourceType',
        'summaryPath'           => 'SummaryPath',
        'summaryRelativePath'   => 'SummaryRelativePath',
        'uri'                   => 'Uri',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
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
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->summaryPath) {
            $res['SummaryPath'] = $this->summaryPath;
        }
        if (null !== $this->summaryRelativePath) {
            $res['SummaryRelativePath'] = $this->summaryRelativePath;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
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
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SummaryPath'])) {
            $model->summaryPath = $map['SummaryPath'];
        }
        if (isset($map['SummaryRelativePath'])) {
            $model->summaryRelativePath = $map['SummaryRelativePath'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
