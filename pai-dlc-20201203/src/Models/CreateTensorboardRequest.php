<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class CreateTensorboardRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var int
     */
    public $cpu;

    /**
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
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @var int
     */
    public $memory;

    /**
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
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $summaryPath;

    /**
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
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'cpu' => 'Cpu',
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'dataSources' => 'DataSources',
        'displayName' => 'DisplayName',
        'jobId' => 'JobId',
        'maxRunningTimeMinutes' => 'MaxRunningTimeMinutes',
        'memory' => 'Memory',
        'options' => 'Options',
        'priority' => 'Priority',
        'quotaId' => 'QuotaId',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'summaryPath' => 'SummaryPath',
        'summaryRelativePath' => 'SummaryRelativePath',
        'tensorboardDataSources' => 'TensorboardDataSources',
        'tensorboardSpec' => 'TensorboardSpec',
        'uri' => 'Uri',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (\is_array($this->tensorboardDataSources)) {
            Model::validateArray($this->tensorboardDataSources);
        }
        if (null !== $this->tensorboardSpec) {
            $this->tensorboardSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

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
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tensorboardDataSources)) {
                $res['TensorboardDataSources'] = [];
                $n1 = 0;
                foreach ($this->tensorboardDataSources as $item1) {
                    $res['TensorboardDataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tensorboardSpec) {
            $res['TensorboardSpec'] = null !== $this->tensorboardSpec ? $this->tensorboardSpec->toArray($noStream) : $this->tensorboardSpec;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

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
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = DataSourceItem::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TensorboardDataSources'] as $item1) {
                    $model->tensorboardDataSources[$n1] = TensorboardDataSourceSpec::fromMap($item1);
                    ++$n1;
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
