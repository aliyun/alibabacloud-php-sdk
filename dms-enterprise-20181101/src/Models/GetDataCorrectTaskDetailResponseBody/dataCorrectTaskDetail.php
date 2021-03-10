<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataCorrectTaskDetail extends Model
{
    /**
     * @var int
     */
    public $DBTaskGroupId;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var int
     */
    public $actualAffectRows;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'DBTaskGroupId'    => 'DBTaskGroupId',
        'jobStatus'        => 'jobStatus',
        'actualAffectRows' => 'ActualAffectRows',
        'createTime'       => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCorrectTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
