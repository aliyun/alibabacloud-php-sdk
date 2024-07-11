<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateTensorboardRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @example d-xxxxxxxx
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
     * @example tensorboard
     *
     * @var string
     */
    public $displayName;

    /**
     * @example dlc-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 240
     *
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @example 1000
     *
     * @var int
     */
    public $memory;

    /**
     * @example {"mountpath":"/root/data/"}
     *
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @example dlc-xxxxxx
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example job
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example /root/data/
     *
     * @var string
     */
    public $summaryPath;

    /**
     * @example /summary/
     *
     * @var string
     */
    public $summaryRelativePath;

    /**
     * @var TensorboardDataSourceSpec[]
     */
    public $tensorboardDataSources;

    /**
     * @var TensorboardSpec
     */
    public $tensorboardSpec;

    /**
     * @example oss://.oss-cn-shanghai-finance-1.aliyuncs.com/
     *
     * @var string
     */
    public $uri;

    /**
     * @example 123***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cpu'                    => 'Cpu',
        'dataSourceId'           => 'DataSourceId',
        'dataSourceType'         => 'DataSourceType',
        'dataSources'            => 'DataSources',
        'displayName'            => 'DisplayName',
        'jobId'                  => 'JobId',
        'maxRunningTimeMinutes'  => 'MaxRunningTimeMinutes',
        'memory'                 => 'Memory',
        'options'                => 'Options',
        'priority'               => 'Priority',
        'quotaId'                => 'QuotaId',
        'sourceId'               => 'SourceId',
        'sourceType'             => 'SourceType',
        'summaryPath'            => 'SummaryPath',
        'summaryRelativePath'    => 'SummaryRelativePath',
        'tensorboardDataSources' => 'TensorboardDataSources',
        'tensorboardSpec'        => 'TensorboardSpec',
        'uri'                    => 'Uri',
        'workspaceId'            => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
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
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
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
        if (null !== $this->tensorboardDataSources) {
            $res['TensorboardDataSources'] = [];
            if (null !== $this->tensorboardDataSources && \is_array($this->tensorboardDataSources)) {
                $n = 0;
                foreach ($this->tensorboardDataSources as $item) {
                    $res['TensorboardDataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tensorboardSpec) {
            $res['TensorboardSpec'] = null !== $this->tensorboardSpec ? $this->tensorboardSpec->toMap() : null;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
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
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
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
        if (isset($map['TensorboardDataSources'])) {
            if (!empty($map['TensorboardDataSources'])) {
                $model->tensorboardDataSources = [];
                $n                             = 0;
                foreach ($map['TensorboardDataSources'] as $item) {
                    $model->tensorboardDataSources[$n++] = null !== $item ? TensorboardDataSourceSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TensorboardSpec'])) {
            $model->tensorboardSpec = TensorboardSpec::fromMap($map['TensorboardSpec']);
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
