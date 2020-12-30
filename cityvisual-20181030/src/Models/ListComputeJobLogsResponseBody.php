<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListComputeJobLogsResponseBody\jobLogs;
use AlibabaCloud\Tea\Model;

class ListComputeJobLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobLogs
     */
    public $jobLogs;
    protected $_name = [
        'requestId' => 'RequestId',
        'jobLogs'   => 'JobLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jobLogs) {
            $res['JobLogs'] = null !== $this->jobLogs ? $this->jobLogs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComputeJobLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobLogs'])) {
            $model->jobLogs = jobLogs::fromMap($map['JobLogs']);
        }

        return $model;
    }
}
