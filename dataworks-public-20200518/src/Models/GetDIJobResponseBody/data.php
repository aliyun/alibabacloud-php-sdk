<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\destinationDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\sourceDataSourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\transformationRules;

class data extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $createdUid;

    /**
     * @var int
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
     * @var string
     */
    public $errorMessage;

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
     * @var string[]
     */
    public $runStats;

    /**
     * @var sourceDataSourceSettings[]
     */
    public $sourceDataSourceSettings;

    /**
     * @var string
     */
    public $sourceDataSourceType;

    /**
     * @var int
     */
    public $startedTime;

    /**
     * @var string
     */
    public $startedUid;

    /**
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @var transformationRules[]
     */
    public $transformationRules;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $updatedUid;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'createdUid' => 'CreatedUid',
        'DIJobId' => 'DIJobId',
        'description' => 'Description',
        'destinationDataSourceSettings' => 'DestinationDataSourceSettings',
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'errorMessage' => 'ErrorMessage',
        'jobName' => 'JobName',
        'jobSettings' => 'JobSettings',
        'jobStatus' => 'JobStatus',
        'migrationType' => 'MigrationType',
        'projectId' => 'ProjectId',
        'resourceSettings' => 'ResourceSettings',
        'runStats' => 'RunStats',
        'sourceDataSourceSettings' => 'SourceDataSourceSettings',
        'sourceDataSourceType' => 'SourceDataSourceType',
        'startedTime' => 'StartedTime',
        'startedUid' => 'StartedUid',
        'tableMappings' => 'TableMappings',
        'transformationRules' => 'TransformationRules',
        'updatedTime' => 'UpdatedTime',
        'updatedUid' => 'UpdatedUid',
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
        if (\is_array($this->runStats)) {
            Model::validateArray($this->runStats);
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

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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

        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceSettings) {
            $res['ResourceSettings'] = null !== $this->resourceSettings ? $this->resourceSettings->toArray($noStream) : $this->resourceSettings;
        }

        if (null !== $this->runStats) {
            if (\is_array($this->runStats)) {
                $res['RunStats'] = [];
                foreach ($this->runStats as $key1 => $value1) {
                    $res['RunStats'][$key1] = $value1;
                }
            }
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

        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }

        if (null !== $this->startedUid) {
            $res['StartedUid'] = $this->startedUid;
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

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->updatedUid) {
            $res['UpdatedUid'] = $this->updatedUid;
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
            if (!empty($map['RunStats'])) {
                $model->runStats = [];
                foreach ($map['RunStats'] as $key1 => $value1) {
                    $model->runStats[$key1] = $value1;
                }
            }
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

        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }

        if (isset($map['StartedUid'])) {
            $model->startedUid = $map['StartedUid'];
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

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['UpdatedUid'])) {
            $model->updatedUid = $map['UpdatedUid'];
        }

        return $model;
    }
}
