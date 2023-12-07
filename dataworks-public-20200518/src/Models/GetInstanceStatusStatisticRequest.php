<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceStatusStatisticRequest extends Model
{
    /**
     * @description The date on which the numbers of instances in different states are obtained. Specify the date in the yyyy-MM-dd format.
     *
     * @example 2020-01-01
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The type of the directed acyclic graph (DAG). Valid values:
     *
     *   MANUAL: DAG for a manually triggered workflow
     *   SMOKE_TEST: DAG for a smoke testing workflow
     *   SUPPLY_DATA: DAG for a data backfill instance
     *   BUSINESS_PROCESS_DAG: DAG for a one-time workflow
     *
     * @example MANUAL
     *
     * @var string
     */
    public $dagType;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment. The value DEV indicates the development environment.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $schedulerPeriod;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: auto triggered node
     *   MANUAL: manually triggered node
     *   PAUSE: paused node
     *   SKIP: dry-run node
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'bizDate'         => 'BizDate',
        'dagType'         => 'DagType',
        'projectEnv'      => 'ProjectEnv',
        'projectId'       => 'ProjectId',
        'schedulerPeriod' => 'SchedulerPeriod',
        'schedulerType'   => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetInstanceStatusStatisticRequest
     */
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
