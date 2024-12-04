<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIJobShrinkRequest extends Model
{
    /**
     * @description The description of the synchronization task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The settings of the destination. Only a single destination is supported.
     *
     * This parameter is required.
     * @var string
     */
    public $destinationDataSourceSettingsShrink;

    /**
     * @description The destination type. Valid values: Hologres and Hive.
     *
     * This parameter is required.
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The name of the synchronization task.
     *
     * This parameter is required.
     * @example mysql_to_holo_sync_8772
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The settings for the dimension of the synchronization task. The settings include processing policies for DDL messages, policies for data type mappings between source fields and destination fields, and runtime parameters of the synchronization task.
     *
     * @var string
     */
    public $jobSettingsShrink;

    /**
     * @description The synchronization type. Valid values:
     *
     *   FullAndRealtimeIncremental: one-time full synchronization and real-time incremental synchronization
     *   RealtimeIncremental: real-time incremental synchronization
     *   Full: full synchronization
     *   OfflineIncremental: batch incremental synchronization
     *   FullAndOfflineIncremental: one-time full synchronization and batch incremental synchronization
     *
     * This parameter is required.
     * @example FullAndRealtimeIncremental
     *
     * @var string
     */
    public $migrationType;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The resource settings.
     *
     * This parameter is required.
     * @var string
     */
    public $resourceSettingsShrink;

    /**
     * @description The settings of the source. Only a single source is supported.
     *
     * This parameter is required.
     * @var string
     */
    public $sourceDataSourceSettingsShrink;

    /**
     * @description The source type. Set this parameter to MySQL.
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @description The list of mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. Each entry in the list displays a mapping between a rule used to select synchronization objects and a transformation rule applied to the selected synchronization objects.
     *
     * This parameter is required.
     * @var string
     */
    public $tableMappingsShrink;

    /**
     * @description The list of transformation rules for objects involved in the synchronization task. Each entry in the list defines a transformation rule.
     *
     * @var string
     */
    public $transformationRulesShrink;
    protected $_name = [
        'description'                         => 'Description',
        'destinationDataSourceSettingsShrink' => 'DestinationDataSourceSettings',
        'destinationDataSourceType'           => 'DestinationDataSourceType',
        'jobName'                             => 'JobName',
        'jobSettingsShrink'                   => 'JobSettings',
        'migrationType'                       => 'MigrationType',
        'projectId'                           => 'ProjectId',
        'resourceSettingsShrink'              => 'ResourceSettings',
        'sourceDataSourceSettingsShrink'      => 'SourceDataSourceSettings',
        'sourceDataSourceType'                => 'SourceDataSourceType',
        'tableMappingsShrink'                 => 'TableMappings',
        'transformationRulesShrink'           => 'TransformationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationDataSourceSettingsShrink) {
            $res['DestinationDataSourceSettings'] = $this->destinationDataSourceSettingsShrink;
        }
        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobSettingsShrink) {
            $res['JobSettings'] = $this->jobSettingsShrink;
        }
        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceSettingsShrink) {
            $res['ResourceSettings'] = $this->resourceSettingsShrink;
        }
        if (null !== $this->sourceDataSourceSettingsShrink) {
            $res['SourceDataSourceSettings'] = $this->sourceDataSourceSettingsShrink;
        }
        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
        }
        if (null !== $this->tableMappingsShrink) {
            $res['TableMappings'] = $this->tableMappingsShrink;
        }
        if (null !== $this->transformationRulesShrink) {
            $res['TransformationRules'] = $this->transformationRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDIJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationDataSourceSettings'])) {
            $model->destinationDataSourceSettingsShrink = $map['DestinationDataSourceSettings'];
        }
        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobSettings'])) {
            $model->jobSettingsShrink = $map['JobSettings'];
        }
        if (isset($map['MigrationType'])) {
            $model->migrationType = $map['MigrationType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceSettings'])) {
            $model->resourceSettingsShrink = $map['ResourceSettings'];
        }
        if (isset($map['SourceDataSourceSettings'])) {
            $model->sourceDataSourceSettingsShrink = $map['SourceDataSourceSettings'];
        }
        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }
        if (isset($map['TableMappings'])) {
            $model->tableMappingsShrink = $map['TableMappings'];
        }
        if (isset($map['TransformationRules'])) {
            $model->transformationRulesShrink = $map['TransformationRules'];
        }

        return $model;
    }
}
