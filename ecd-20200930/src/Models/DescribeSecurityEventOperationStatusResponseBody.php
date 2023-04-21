<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatuses;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the processing status of alerts.
     *
     * @var securityEventOperationStatuses[]
     */
    public $securityEventOperationStatuses;

    /**
     * @description The status of the task that handles the alerts. Valid values:
     *
     *   Processing: The task is being executed.
     *   Success: The task is executed.
     *   Failure: The task failed.
     *   Pending: The task is waiting to be executed.
     *
     * @example Success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'securityEventOperationStatuses' => 'SecurityEventOperationStatuses',
        'taskStatus'                     => 'TaskStatus',
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
        if (null !== $this->securityEventOperationStatuses) {
            $res['SecurityEventOperationStatuses'] = [];
            if (null !== $this->securityEventOperationStatuses && \is_array($this->securityEventOperationStatuses)) {
                $n = 0;
                foreach ($this->securityEventOperationStatuses as $item) {
                    $res['SecurityEventOperationStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventOperationStatuses'])) {
            if (!empty($map['SecurityEventOperationStatuses'])) {
                $model->securityEventOperationStatuses = [];
                $n                                     = 0;
                foreach ($map['SecurityEventOperationStatuses'] as $item) {
                    $model->securityEventOperationStatuses[$n++] = null !== $item ? securityEventOperationStatuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
