<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The job analysis result.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The name of the job.
     *
     * @example CREATE TABLE test...ranks=1 (Stage-1)
     *
     * @var string
     */
    public $appName;

    /**
     * @description The end time of the job. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1666213200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The job IDs. Multiple job IDs are separated with commas (,).
     *
     * @example null
     *
     * @var string[]
     */
    public $ids;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The SQL statement of the job. This parameter is left empty for non-SQL jobs.
     *
     * @example SELECT id, count(1) FROM test group by id;
     *
     * @var string
     */
    public $querySql;

    /**
     * @description The YARN queue to which the job was submitted.
     *
     * @example DW
     *
     * @var string
     */
    public $queue;

    /**
     * @description The time when the job was submitted. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Unit: milliseconds.
     *
     * @example 1677465658275
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The type of the compute engine.
     *
     * @example SPARK
     *
     * @var string
     */
    public $type;

    /**
     * @description The username that is used to submit the job.
     *
     * @example DW
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'analysis'  => 'Analysis',
        'appName'   => 'AppName',
        'endTime'   => 'EndTime',
        'ids'       => 'Ids',
        'metrics'   => 'Metrics',
        'querySql'  => 'QuerySql',
        'queue'     => 'Queue',
        'startTime' => 'StartTime',
        'type'      => 'Type',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toMap() : null;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->querySql) {
            $res['QuerySql'] = $this->querySql;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['QuerySql'])) {
            $model->querySql = $map['QuerySql'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
