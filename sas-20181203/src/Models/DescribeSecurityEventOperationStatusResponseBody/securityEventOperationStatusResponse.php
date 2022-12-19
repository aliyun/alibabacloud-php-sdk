<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponseBody\securityEventOperationStatusResponse\securityEventOperationStatuses;
use AlibabaCloud\Tea\Model;

class securityEventOperationStatusResponse extends Model
{
    /**
     * @description An array consisting of the status of the alert events handled by the task.
     *
     * @var securityEventOperationStatuses[]
     */
    public $securityEventOperationStatuses;

    /**
     * @description The status of the task that handles the alert events. Valid values:
     *
     *   **Processing**: The task is running.
     *   **Success**: The task is successful.
     *   **Failure**: The task failed.
     *   **Pending**: The task is pending.
     *
     * @example Success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'securityEventOperationStatuses' => 'SecurityEventOperationStatuses',
        'taskStatus'                     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return securityEventOperationStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
