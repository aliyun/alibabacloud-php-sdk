<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\destinationDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\sourceDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo\transformationRules;

class pagingInfo extends Model
{
    /**
     * @var string
     */
    public $DIJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var destinationDataSourceSettings[]
     */
    public $destinationDataSourceSettings;

    /**
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var jobSettings
     */
    public $jobSettings;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $migrationType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var resourceSettings
     */
    public $resourceSettings;

    /**
     * @var sourceDataSourceSettings[]
     */
    public $sourceDataSourceSettings;

    /**
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @var transformationRules[]
     */
    public $transformationRules;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'destinationDataSourceSettings' => 'DestinationDataSourceSettings',
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'id' => 'Id',
        'jobName' => 'JobName',
        'jobSettings' => 'JobSettings',
        'jobStatus' => 'JobStatus',
        'jobType' => 'JobType',
        'migrationType' => 'MigrationType',
        'projectId' => 'ProjectId',
        'resourceSettings' => 'ResourceSettings',
        'sourceDataSourceSettings' => 'SourceDataSourceSettings',
        'sourceDataSourceType' => 'SourceDataSourceType',
        'tableMappings' => 'TableMappings',
        'transformationRules' => 'TransformationRules',
    ];

    public function validate()
    {
        if (\is_array($this->destinationDataSourceSettings)) {
            Model::validateArray($this->destinationDataSourceSettings);
        }
        if (null !== $this->jobSettings) {
            $this->jobSettings->validate();
        }
        if (null !== $this->resourceSettings) {
            $this->resourceSettings->validate();
        }
        if (\is_array($this->sourceDataSourceSettings)) {
            Model::validateArray($this->sourceDataSourceSettings);
        }
        if (\is_array($this->tableMappings)) {
            Model::validateArray($this->tableMappings);
        }
        if (\is_array($this->transformationRules)) {
            Model::validateArray($this->transformationRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationDataSourceSettings) {
            if (\is_array($this->destinationDataSourceSettings)) {
                $res['DestinationDataSourceSettings'] = [];
                $n1 = 0;
                foreach ($this->destinationDataSourceSettings as $item1) {
                    $res['DestinationDataSourceSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobSettings) {
            $res['JobSettings'] = null !== $this->jobSettings ? $this->jobSettings->toArray($noStream) : $this->jobSettings;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceSettings) {
            $res['ResourceSettings'] = null !== $this->resourceSettings ? $this->resourceSettings->toArray($noStream) : $this->resourceSettings;
        }

        if (null !== $this->sourceDataSourceSettings) {
            if (\is_array($this->sourceDataSourceSettings)) {
                $res['SourceDataSourceSettings'] = [];
                $n1 = 0;
                foreach ($this->sourceDataSourceSettings as $item1) {
                    $res['SourceDataSourceSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
        }

        if (null !== $this->tableMappings) {
            if (\is_array($this->tableMappings)) {
                $res['TableMappings'] = [];
                $n1 = 0;
                foreach ($this->tableMappings as $item1) {
                    $res['TableMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transformationRules) {
            if (\is_array($this->transformationRules)) {
                $res['TransformationRules'] = [];
                $n1 = 0;
                foreach ($this->transformationRules as $item1) {
                    $res['TransformationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationDataSourceSettings'])) {
            if (!empty($map['DestinationDataSourceSettings'])) {
                $model->destinationDataSourceSettings = [];
                $n1 = 0;
                foreach ($map['DestinationDataSourceSettings'] as $item1) {
                    $model->destinationDataSourceSettings[$n1] = destinationDataSourceSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
                $n1 = 0;
                foreach ($map['SourceDataSourceSettings'] as $item1) {
                    $model->sourceDataSourceSettings[$n1] = sourceDataSourceSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }

        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n1 = 0;
                foreach ($map['TableMappings'] as $item1) {
                    $model->tableMappings[$n1] = tableMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n1 = 0;
                foreach ($map['TransformationRules'] as $item1) {
                    $model->transformationRules[$n1] = transformationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
