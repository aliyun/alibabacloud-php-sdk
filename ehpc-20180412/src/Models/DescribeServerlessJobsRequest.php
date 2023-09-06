<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeServerlessJobsRequest extends Model
{
    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The list of serverless job IDs or the subtask IDs (array jobs).
     *
     * >
     *
     *   If the serverless job is an array job, you can specify only the subtask ID. Specify the subtask ID in the format of \<array job ID>\_< subtask index>. For example, 10\_3 indicates the subtask whose index is 3 in the array job whose ID is 10.
     *
     *   You can specify only a single ID in one request.
     *
     * @var string[]
     */
    public $jobIds;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'jobIds'    => 'JobIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerlessJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }

        return $model;
    }
}
