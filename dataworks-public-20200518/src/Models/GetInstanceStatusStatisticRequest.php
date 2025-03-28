<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceStatusStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $dagType;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $schedulerPeriod;

    /**
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'bizDate' => 'BizDate',
        'dagType' => 'DagType',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'schedulerPeriod' => 'SchedulerPeriod',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->schedulerPeriod) {
            $res['SchedulerPeriod'] = $this->schedulerPeriod;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SchedulerPeriod'])) {
            $model->schedulerPeriod = $map['SchedulerPeriod'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
