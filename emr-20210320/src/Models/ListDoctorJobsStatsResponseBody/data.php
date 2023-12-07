<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\appsCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\vcoreSeconds;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of jobs.
     *
     * @var appsCount
     */
    public $appsCount;

    /**
     * @description The aggregated amount of memory that is allocated to the job multiplied by the number of seconds the job has been running.
     *
     * @var memSeconds
     */
    public $memSeconds;

    /**
     * @description The YARN queue to which the job was submitted.
     *
     * @example DW
     *
     * @var string
     */
    public $queue;

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

    /**
     * @description The aggregated number of vCPUs that are allocated to the job multiplied by the number of seconds the job has been running.
     *
     * @var vcoreSeconds
     */
    public $vcoreSeconds;
    protected $_name = [
        'appsCount'    => 'AppsCount',
        'memSeconds'   => 'MemSeconds',
        'queue'        => 'Queue',
        'type'         => 'Type',
        'user'         => 'User',
        'vcoreSeconds' => 'VcoreSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appsCount) {
            $res['AppsCount'] = null !== $this->appsCount ? $this->appsCount->toMap() : null;
        }
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toMap() : null;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toMap() : null;
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
        if (isset($map['AppsCount'])) {
            $model->appsCount = appsCount::fromMap($map['AppsCount']);
        }
        if (isset($map['MemSeconds'])) {
            $model->memSeconds = memSeconds::fromMap($map['MemSeconds']);
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }

        return $model;
    }
}
