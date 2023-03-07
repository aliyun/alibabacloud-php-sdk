<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the job.
     *
     * You can call the [ListJobs](~~87251~~) operation to query the job ID.
     * @example 1.scheduler****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'async'     => 'Async',
        'clusterId' => 'ClusterId',
        'jobId'     => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
