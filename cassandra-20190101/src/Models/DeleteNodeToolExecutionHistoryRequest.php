<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteNodeToolExecutionHistoryRequest extends Model
{
    /**
     * @example cds-3872l6py****n4ug
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example job-QdKa51s****U0gHf
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'dataCenterId' => 'DataCenterId',
        'jobId'        => 'JobId',
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
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNodeToolExecutionHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
