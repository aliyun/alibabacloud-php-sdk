<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataTrackOrderRequest;

use AlibabaCloud\Dara\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $dbId;
    /**
     * @var string
     */
    public $jobEndTime;
    /**
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
        if (\is_array($this->tableNames)) {
            Model::validateArray($this->tableNames);
        }
        if (\is_array($this->trackTypes)) {
            Model::validateArray($this->trackTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tableNames)) {
                $res['TableNames'] = [];
                $n1                = 0;
                foreach ($this->tableNames as $item1) {
                    $res['TableNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->trackTypes) {
            if (\is_array($this->trackTypes)) {
                $res['TrackTypes'] = [];
                $n1                = 0;
                foreach ($this->trackTypes as $item1) {
                    $res['TrackTypes'][$n1++] = $item1;
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
                $model->tableNames = [];
                $n1                = 0;
                foreach ($map['TableNames'] as $item1) {
                    $model->tableNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TrackTypes'])) {
            if (!empty($map['TrackTypes'])) {
                $model->trackTypes = [];
                $n1                = 0;
                foreach ($map['TrackTypes'] as $item1) {
                    $model->trackTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
