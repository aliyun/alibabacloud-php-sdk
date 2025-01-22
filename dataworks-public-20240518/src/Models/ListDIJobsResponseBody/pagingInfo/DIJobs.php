<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class DIJobs extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
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
     * @var string
     */
    public $sourceDataSourceType;
    protected $_name = [
        'DIJobId'                   => 'DIJobId',
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'id'                        => 'Id',
        'jobName'                   => 'JobName',
        'jobStatus'                 => 'JobStatus',
        'migrationType'             => 'MigrationType',
        'projectId'                 => 'ProjectId',
        'sourceDataSourceType'      => 'SourceDataSourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
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

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->migrationType) {
            $res['MigrationType'] = $this->migrationType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
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

        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
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

        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }

        return $model;
    }
}
