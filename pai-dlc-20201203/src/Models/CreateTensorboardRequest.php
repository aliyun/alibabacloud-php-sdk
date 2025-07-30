<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CreateTensorboardRequest extends Model
{
    /**
     * @description The job visibility. Valid values:
     *
     *   PUBLIC: Visible to all members in the workspace.
     *   PRIVATE: Visible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The number of vCPU cores.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The dataset ID.
     *
     * @example d-xxxxxxxx
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The dataset type. Valid values:
     *
     *   OSS
     *   NAS
     *
     * @example OSS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The configurations of the data source.
     *
     * @var DataSourceItem[]
     */
    public $dataSources;

    /**
     * @description The TensorBoard name
     *
     * @example tensorboard
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The job ID. For more information about how to query the job ID, see [ListJobs](https://help.aliyun.com/document_detail/459676.html).
     *
     * @example dlc-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The maximum running duration. Unit: minutes.
     *
     * @example 240
     *
     * @var int
     */
    public $maxRunningTimeMinutes;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 1000
     *
     * @var int
     */
    public $memory;

    /**
     * @description The extended fields of the dataset are in the JSON format. MountPath: the path to mount the dataset.
     *
     * @example {"mountpath":"/root/data/"}
     *
     * @var string
     */
    public $options;

    /**
     * @description The priority of the job. Default value: 1. Valid values: 1 to 9.
     *
     *   1 is the lowest priority.
     *   9 is the highest priority.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The resource quota ID. This parameter is required when you create a TensorBoard job by using a resource quota.
     *
     * This feature is currently limited to whitelisted users. If you need to use this feature, contact us.
     *
     * @example quota12345
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description The source ID.
     *
     * @example dlc-xxxxxx
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The source type.
     *
     * @example job
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The directory of summary.
     *
     * @example /root/data/
     *
     * @var string
     */
    public $summaryPath;

    /**
     * @description The relative path of summary.
     *
     * @example /summary/
     *
     * @var string
     */
    public $summaryRelativePath;

    /**
     * @description The configurations of datasets mounted with the TensorBoard job.
     *
     * @var TensorboardDataSourceSpec[]
     */
    public $tensorboardDataSources;

    /**
     * @description The pay-as-you-go configuration of TensorBoard, which is used to create TensorBoard jobs that use pay-as-you-go resources.
     *
     * @var TensorboardSpec
     */
    public $tensorboardSpec;

    /**
     * @description The dataset URI:
     *
     *   Value format when DataSourceType is set to OSS: `oss://[oss-bucket].[endpoint]/[path]`.
     *   Value format when DataSourceType is set to NAS:`nas://[nas-filesystem-id].[region]/[path]`.
     *
     * @example oss://.oss-cn-shanghai-finance-1.aliyuncs.com/
     *
     * @var string
     */
    public $uri;

    /**
     * @description The workspace ID.
     *
     * @example 123***
     *
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

    public function validate() {}

    public function toMap()
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
                $n = 0;
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
                $n = 0;
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
