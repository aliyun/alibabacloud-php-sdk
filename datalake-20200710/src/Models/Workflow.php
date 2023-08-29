<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Workflow extends Model
{
    /**
     * @var string
     */
    public $latestEndTime;

    /**
     * @var string
     */
    public $latestInstanceId;

    /**
     * @var string
     */
    public $latestInstanceStatus;

    /**
     * @var string
     */
    public $latestStartTime;
    protected $_name = [
        'latestEndTime'        => 'LatestEndTime',
        'latestInstanceId'     => 'LatestInstanceId',
        'latestInstanceStatus' => 'LatestInstanceStatus',
        'latestStartTime'      => 'LatestStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestEndTime) {
            $res['LatestEndTime'] = $this->latestEndTime;
        }
        if (null !== $this->latestInstanceId) {
            $res['LatestInstanceId'] = $this->latestInstanceId;
        }
        if (null !== $this->latestInstanceStatus) {
            $res['LatestInstanceStatus'] = $this->latestInstanceStatus;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Workflow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatestEndTime'])) {
            $model->latestEndTime = $map['LatestEndTime'];
        }
        if (isset($map['LatestInstanceId'])) {
            $model->latestInstanceId = $map['LatestInstanceId'];
        }
        if (isset($map['LatestInstanceStatus'])) {
            $model->latestInstanceStatus = $map['LatestInstanceStatus'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
        }

        return $model;
    }
}
