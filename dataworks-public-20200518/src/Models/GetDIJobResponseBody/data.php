<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\destinationDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\sourceDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\transformationRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp when the synchronization task was created. The timestamp is accurate to the second.
     *
     * @example 1671516776
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The ID of the user who creates the synchronization task.
     *
     * @example 100000001
     *
     * @var string
     */
    public $createdUid;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11588
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The description of the synchronization task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The settings of the destination. Only a single destination is supported.
     *
     * @var destinationDataSourceSettings[]
     */
    public $destinationDataSourceSettings;

    /**
     * @description The type of the destination. The value Hologres is returned.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The error message returned if the value of the JobStatus parameter is Failed.
     *
     * @example error details xxx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the synchronization task.
     *
     * @example mysql_to_holo_sync_445
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The settings for the dimension of the synchronization task. The settings include processing policies for DDL messages, policies for data type mappings between source fields and destination fields, and runtime parameters of the synchronization task.
     *
     * @var jobSettings
     */
    public $jobSettings;

    /**
     * @description The task status. Valid values:
     *
     *   Finished
     *   Initialized
     *   Stopped
     *   Failed
     *   Running
     *   Stopping
     *
     * @example Finished
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The synchronization type. Valid values:
     *
     *   FullAndRealtimeIncremental: one-time full synchronization and real-time incremental synchronization
     *   RealtimeIncremental: real-time incremental synchronization
     *   Full: one-time full synchronization
     *
     * @example FullAndRealtimeIncremental
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The workspace ID.
     *
     * @example 22
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
     * @description The information about the running of the synchronization task.
     *
     * @var string[]
     */
    public $runStats;

    /**
     * @description The settings of the source. Only a single source is supported.
     *
     * @var sourceDataSourceSettings[]
     */
    public $sourceDataSourceSettings;

    /**
     * @description The type of the source. The value MySQL is returned.
     *
     * @example MySQL
     *
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @description The timestamp when the synchronization task was last started. The timestamp is accurate to the second.
     *
     * @example 1673859999
     *
     * @var int
     */
    public $startedTime;

    /**
     * @description The ID of the user who last starts the synchronization task.
     *
     * @example 100000001
     *
     * @var string
     */
    public $startedUid;

    /**
     * @description The list of mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. Each entry in the list displays a mapping between a rule used to select synchronization objects and a transformation rule applied to the selected synchronization objects.
     *
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @description The list of transformation rules for objects involved in the synchronization task. Each entry in the list defines a transformation rule.
     *
     * @var transformationRules[]
     */
    public $transformationRules;

    /**
     * @description The timestamp when the synchronization task was last modified. The timestamp is accurate to the second.
     *
     * @example 1673859985
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the user who last modifies the synchronization task.
     *
     * @example 100000001
     *
     * @var string
     */
    public $updatedUid;
    protected $_name = [
        'createdTime'                   => 'CreatedTime',
        'createdUid'                    => 'CreatedUid',
        'DIJobId'                       => 'DIJobId',
        'description'                   => 'Description',
        'destinationDataSourceSettings' => 'DestinationDataSourceSettings',
        'destinationDataSourceType'     => 'DestinationDataSourceType',
        'errorMessage'                  => 'ErrorMessage',
        'jobName'                       => 'JobName',
        'jobSettings'                   => 'JobSettings',
        'jobStatus'                     => 'JobStatus',
        'migrationType'                 => 'MigrationType',
        'projectId'                     => 'ProjectId',
        'resourceSettings'              => 'ResourceSettings',
        'runStats'                      => 'RunStats',
        'sourceDataSourceSettings'      => 'SourceDataSourceSettings',
        'sourceDataSourceType'          => 'SourceDataSourceType',
        'startedTime'                   => 'StartedTime',
        'startedUid'                    => 'StartedUid',
        'tableMappings'                 => 'TableMappings',
        'transformationRules'           => 'TransformationRules',
        'updatedTime'                   => 'UpdatedTime',
        'updatedUid'                    => 'UpdatedUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->createdUid) {
            $res['CreatedUid'] = $this->createdUid;
        }
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (null !== $this->runStats) {
            $res['RunStats'] = $this->runStats;
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
        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }
        if (null !== $this->startedUid) {
            $res['StartedUid'] = $this->startedUid;
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
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->updatedUid) {
            $res['UpdatedUid'] = $this->updatedUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatedUid'])) {
            $model->createdUid = $map['CreatedUid'];
        }
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
        if (isset($map['RunStats'])) {
            $model->runStats = $map['RunStats'];
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
        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }
        if (isset($map['StartedUid'])) {
            $model->startedUid = $map['StartedUid'];
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
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UpdatedUid'])) {
            $model->updatedUid = $map['UpdatedUid'];
        }

        return $model;
    }
}
