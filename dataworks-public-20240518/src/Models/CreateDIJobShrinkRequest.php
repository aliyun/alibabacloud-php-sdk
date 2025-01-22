<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDIJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $destinationDataSourceSettingsShrink;
    /**
     * @var string
     */
    public $destinationDataSourceType;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var string
     */
    public $jobSettingsShrink;
    /**
     * @var string
     */
    public $migrationType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $resourceSettingsShrink;
    /**
     * @var string
     */
    public $sourceDataSourceSettingsShrink;
    /**
     * @var string
     */
    public $sourceDataSourceType;
    /**
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
        'name'                                => 'Name',
        'projectId'                           => 'ProjectId',
        'resourceSettingsShrink'              => 'ResourceSettings',
        'sourceDataSourceSettingsShrink'      => 'SourceDataSourceSettings',
        'sourceDataSourceType'                => 'SourceDataSourceType',
        'tableMappingsShrink'                 => 'TableMappings',
        'transformationRulesShrink'           => 'TransformationRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
