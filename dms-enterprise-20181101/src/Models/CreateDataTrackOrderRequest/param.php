<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderRequest;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @example 123***
     *
     * @var string
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
     * @var string[]
     */
    public $tableNames;

    /**
     * @var string[]
     */
    public $trackTypes;
    protected $_name = [
        'dbId'         => 'DbId',
        'jobEndTime'   => 'JobEndTime',
        'jobStartTime' => 'JobStartTime',
        'tableNames'   => 'TableNames',
        'trackTypes'   => 'TrackTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->jobEndTime) {
            $res['JobEndTime'] = $this->jobEndTime;
        }
        if (null !== $this->jobStartTime) {
            $res['JobStartTime'] = $this->jobStartTime;
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
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['JobEndTime'])) {
            $model->jobEndTime = $map['JobEndTime'];
        }
        if (isset($map['JobStartTime'])) {
            $model->jobStartTime = $map['JobStartTime'];
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
