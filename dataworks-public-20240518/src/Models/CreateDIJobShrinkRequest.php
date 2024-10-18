<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $destinationDataSourceSettingsShrink;

    /**
     * @description This parameter is required.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description This parameter is required.
     *
     * @example mysql_to_holo_sync_8772
     *
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobSettingsShrink;

    /**
     * @description This parameter is required.
     *
     * @example FullAndRealtimeIncremental
     *
     * @var string
     */
    public $migrationType;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $resourceSettingsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceDataSourceSettingsShrink;

    /**
     * @description This parameter is required.
     *
     * @example MySQL
     *
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tableMappingsShrink;

    /**
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
