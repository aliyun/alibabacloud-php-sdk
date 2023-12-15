<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeToolExecutionHistoryRequest extends Model
{
    /**
     * @example cds-t4n98w89z77*****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $dcId;

    /**
     * @example job-y0edwqo993m*****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dcId'      => 'DcId',
        'jobId'     => 'JobId',
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
        if (null !== $this->dcId) {
            $res['DcId'] = $this->dcId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeToolExecutionHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DcId'])) {
            $model->dcId = $map['DcId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
