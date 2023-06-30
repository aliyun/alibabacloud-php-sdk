<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackOrderDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataTrackOrderDetail extends Model
{
    /**
     * @description The name that is used to search for the database.
     *
     * @example xxx@yyy:3306
     *
     * @var string
     */
    public $databaseSearchName;

    /**
     * @description The ID of the database.
     *
     * @example 3431****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The end time of the time range in which data operations are tracked. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $jobEndTime;

    /**
     * @description The start time of the time range in which data operations are tracked. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2023-04-23 00:00:00
     *
     * @var string
     */
    public $jobStartTime;

    /**
     * @description The status of the data tracking task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **LISTING**: The binary logs are being obtained.
     *   **LIST_SUCCESS**: The binary logs are successfully obtained.
     *   **DOWNLOADING**: The binary logs are being downloaded.
     *   **DOWNLOAD_FAIL**: The binary logs failed to be downloaded.
     *   **DOWNLOAD_SUCCESS**: The binary logs are successfully downloaded.
     *   **FILTERING**: The binary logs are being parsed.
     *   **FILTER_FAIL**: The binary logs failed to be parsed.
     *   **FILTER_SUCCESS**: The binary logs are successfully parsed.
     *
     * @example FILTER_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name of the database.
     *
     * @example as_task
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The description of the task status.
     *
     * @example searching success
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The names of the tables for which data operations are tracked.
     *
     * @var string[]
     */
    public $tableNames;

    /**
     * @description The types of data operations that are tracked.
     *
     * @var string[]
     */
    public $trackTypes;
    protected $_name = [
        'databaseSearchName' => 'DatabaseSearchName',
        'dbId'               => 'DbId',
        'jobEndTime'         => 'JobEndTime',
        'jobStartTime'       => 'JobStartTime',
        'jobStatus'          => 'JobStatus',
        'logic'              => 'Logic',
        'schemaName'         => 'SchemaName',
        'statusDesc'         => 'StatusDesc',
        'tableNames'         => 'TableNames',
        'trackTypes'         => 'TrackTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseSearchName) {
            $res['DatabaseSearchName'] = $this->databaseSearchName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->jobEndTime) {
            $res['JobEndTime'] = $this->jobEndTime;
        }
        if (null !== $this->jobStartTime) {
            $res['JobStartTime'] = $this->jobStartTime;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }
        if (null !== $this->trackTypes) {
            $res['TrackTypes'] = $this->trackTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataTrackOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseSearchName'])) {
            $model->databaseSearchName = $map['DatabaseSearchName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['JobEndTime'])) {
            $model->jobEndTime = $map['JobEndTime'];
        }
        if (isset($map['JobStartTime'])) {
            $model->jobStartTime = $map['JobStartTime'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }
        if (isset($map['TrackTypes'])) {
            if (!empty($map['TrackTypes'])) {
                $model->trackTypes = $map['TrackTypes'];
            }
        }

        return $model;
    }
}
