<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackOrderDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataTrackOrderDetail extends Model
{
    /**
     * @example xxx@yyy:3306
     *
     * @var string
     */
    public $databaseSearchName;

    /**
     * @example 3431****
     *
     * @var int
     */
    public $dbId;

    /**
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $jobEndTime;

    /**
     * @example 2023-04-23 00:00:00
     *
     * @var string
     */
    public $jobStartTime;

    /**
     * @example FILTER_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @example as_task
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example searching success
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @var string[]
     */
    public $tableNames;

    /**
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
