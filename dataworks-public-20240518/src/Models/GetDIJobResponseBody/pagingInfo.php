<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\destinationDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\sourceDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\transformationRules;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * @example 32601
     *
     * @var string
     */
    public $DIJobId;

    /**
     * @description The description of the synchronization task.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The properties of the destination.
     *
     * @var destinationDataSourceSettings[]
     */
    public $destinationDataSourceSettings;

    /**
     * @description The destination type. The value Hologres is returned.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The name of the synchronization task.
     *
     * @example imp_ods_dms_det_dealer_info_df
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The runtime settings.
     *
     * @var jobSettings
     */
    public $jobSettings;

    /**
     * @description 任务状态。
     * - Stop：停止
     * @example Running
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The synchronization type. Valid values:
     *
     *   FullAndRealtimeIncremental: one-time full synchronization and real-time incremental synchronization
     *   RealtimeIncremental: real-time incremental synchronization
     *   Full: full synchronization
     *   OfflineIncremental: batch incremental synchronization
     *   FullAndOfflineIncremental: one-time full synchronization and batch incremental synchronization
     *
     * @example FullAndRealtimeIncremental
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter indicates the DataWorks workspace to which the API operation is applied.
     * @example 98330
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The resource settings.
     *
     * @var resourceSettings
     */
    public $resourceSettings;

    /**
     * @description The settings of the source. Only a single source is supported.
     *
     * @var sourceDataSourceSettings[]
     */
    public $sourceDataSourceSettings;

    /**
     * @description The source type. The value MySQL is returned.
     *
     * @example Mysql
     *
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @description The list of mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. Each entry in the list displays a mapping between a rule used to select synchronization objects and a transformation rule applied to the selected synchronization objects.
     *
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @description The list of transformation rules that are applied to the synchronization objects selected from the source. Each entry in the list defines a transformation rule.
     *
     * @var transformationRules[]
     */
    public $transformationRules;
    protected $_name = [
        'DIJobId'                       => 'DIJobId',
        'description'                   => 'Description',
        'destinationDataSourceSettings' => 'DestinationDataSourceSettings',
        'destinationDataSourceType'     => 'DestinationDataSourceType',
        'jobName'                       => 'JobName',
        'jobSettings'                   => 'JobSettings',
        'jobStatus'                     => 'JobStatus',
        'migrationType'                 => 'MigrationType',
        'projectId'                     => 'ProjectId',
        'resourceSettings'              => 'ResourceSettings',
        'sourceDataSourceSettings'      => 'SourceDataSourceSettings',
        'sourceDataSourceType'          => 'SourceDataSourceType',
        'tableMappings'                 => 'TableMappings',
        'transformationRules'           => 'TransformationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationDataSourceSettings) {
            $res['DestinationDataSourceSettings'] = [];
            if (null !== $this->destinationDataSourceSettings && \is_array($this->destinationDataSourceSettings)) {
                $n = 0;
                foreach ($this->destinationDataSourceSettings as $item) {
                    $res['DestinationDataSourceSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobSettings) {
            $res['JobSettings'] = null !== $this->jobSettings ? $this->jobSettings->toMap() : null;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceSettings) {
            $res['ResourceSettings'] = null !== $this->resourceSettings ? $this->resourceSettings->toMap() : null;
        }
        if (null !== $this->sourceDataSourceSettings) {
            $res['SourceDataSourceSettings'] = [];
            if (null !== $this->sourceDataSourceSettings && \is_array($this->sourceDataSourceSettings)) {
                $n = 0;
                foreach ($this->sourceDataSourceSettings as $item) {
                    $res['SourceDataSourceSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
        }
        if (null !== $this->tableMappings) {
            $res['TableMappings'] = [];
            if (null !== $this->tableMappings && \is_array($this->tableMappings)) {
                $n = 0;
                foreach ($this->tableMappings as $item) {
                    $res['TableMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transformationRules) {
            $res['TransformationRules'] = [];
            if (null !== $this->transformationRules && \is_array($this->transformationRules)) {
                $n = 0;
                foreach ($this->transformationRules as $item) {
                    $res['TransformationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationDataSourceSettings'])) {
            if (!empty($map['DestinationDataSourceSettings'])) {
                $model->destinationDataSourceSettings = [];
                $n                                    = 0;
                foreach ($map['DestinationDataSourceSettings'] as $item) {
                    $model->destinationDataSourceSettings[$n++] = null !== $item ? destinationDataSourceSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobSettings'])) {
            $model->jobSettings = jobSettings::fromMap($map['JobSettings']);
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceSettings'])) {
            $model->resourceSettings = resourceSettings::fromMap($map['ResourceSettings']);
        }
        if (isset($map['SourceDataSourceSettings'])) {
            if (!empty($map['SourceDataSourceSettings'])) {
                $model->sourceDataSourceSettings = [];
                $n                               = 0;
                foreach ($map['SourceDataSourceSettings'] as $item) {
                    $model->sourceDataSourceSettings[$n++] = null !== $item ? sourceDataSourceSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }
        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n                    = 0;
                foreach ($map['TableMappings'] as $item) {
                    $model->tableMappings[$n++] = null !== $item ? tableMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n                          = 0;
                foreach ($map['TransformationRules'] as $item) {
                    $model->transformationRules[$n++] = null !== $item ? transformationRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
